<?php
 
    class User extends lmbActiveRecord {
        
        protected $password;
        private $__salt;
        
        protected $is_logged_in = false;
        
        /**
         * @var string name of class database table to store instance fields, if not set lmbActiveRecord tries to guess it
         */
        protected $_db_table_name = 'lmb_cms_user';        
        
        public function login($login, $password) {
            $hash_password = $this->cryptPassword($password);
            
            $criteria = new lmbSQLFieldCriteria('login', $login);
            $criteria->addAnd(new lmbSQLFieldCriteria('hashed_password', $password));
            
            $user = lmbActiveRecord::findFirst('User', array('criteria' => $criteria));
            
            if ($user) {
                $this->import($user);
                $this->setIsNew(false);
                $this->setIsLoggedIn(true);
                
                return true;
            }else {
                $this->setIsLoggedIn(false);
                return false;
            }
        }
        
        public function logout() {
            //$this->removeAll();
            $this->is_logged_in = false;
        }


        protected function _createValidator() {
            //parent::_createValidator();
            $validator = new lmbValidator();
            $validator->addRequiredRule("login");
            $validator->addRequiredRule("email");
            $validator->addRequiredRule("name");
            
            lmb_require('limb/validation/src/rule/lmbEmailRule.class.php');
            $validator->addRule(new lmbEmailRule("email"));
            
            lmb_require('src/validation/UserUniqueFieldRule.class.php');
  
            $validator->addRule(new UserUniqueFieldRule('login', $this));
            $validator->addRule(new UserUniqueFieldRule('email', $this));   
            
            $this->__salt  = lmb_env_get("LIMB_PASSW_SALT", null);
            return $validator;
        }//end: _createValidator()
        
        protected function _onBeforeSave() {
            //parent::_onBeforeSave();
            $this->_generatePassword();
        }//end: _onBeforeSave()
        
        protected function _generatePassword() {
            if($this->password)
                $this->setHashedPassword($this->cryptPassword($this->password));            
        }//end: _generatePassword()

        /*
         * @method cryptPassword - crypt by Blowfish algorithm 
         * 
         * @param password string
         */
        public function cryptPassword($password) {
            $hash = $this->__cryptBlowfish($password);
            if ($hash == $this->__cryptBlowfish($password, $hash)) {
                return $hash;
            } 
            else {
                return md5($password);
            }            
                
        } 
 
        private function __cryptBlowfish($passw, $salt=null, $rounds=12){
            if($rounds < 4 || $rounds > 31) $rounds = 12;

            if (!is_null($this->__salt)){
                $salt = sprintf('$2a$%02d$', $rounds).$this->__salt;
            }elseif (is_null($salt)){ 
                $salt = sprintf('$2a$%02d$', $rounds).substr(str_replace('+', '.', base64_encode(pack('N4', mt_rand(), mt_rand(), mt_rand(), mt_rand()))), 0, 22);
            }
            
            return crypt($passw, $salt);            
        }        
        
    }//end: class User
?>
