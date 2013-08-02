<?php
    class UserController extends lmbController {
               
        public function doLogin() {
            if (!$this->request->hasPost()) {
                return;
            }
            
            $user = $this->toolkit->getUser();
            
            $this->useForm('login_form');
            $this->setFormDatasource($this->request);
            
            $this->_validateLoginForm();
            
            if (!$this->error_list->isValid()) {
                return;
            }
            
            $login = $this->request->get('login');
            $password = $this->request->get('password');
            
            if (!$user->login($login, $password)) {
                $this->addError('Login or Password incorrect!');
            } else {
                $this->toolkit->getSession()->set('user_id', $user->getId());
                $this->flashAndRedirect('You were logged in', '/');
            }
        }
 
        public function doLogout() {
            $user = $this->toolkit->getUser();
            $user->logout();
            $this->toolkit->getSession()->remove('user_id');
            $this->response->redirect('/');
        } 
        
        public function doRegister() {
            /*
             *method useForm used for MACRO, simplest params check, replace
             */
            $this->useForm("register_form");
            $this->setFormDatasource($this->request);
            
            if ($this->request->hasPost()){
                $user_properties = $this->request->getPost(array('login', 'name', 
                    'email', 'password', 'address'));
                
                $user = new User($user_properties);
                
                $user->trySave($this->error_list);
                
                $this->_validatePasswordField();
                
                if ($this->error_list->isValid()){
                    //$this->toolkit->getUser()->login($login, $password);
                    $this->toolkit->getSession()->set('user_id', $user->getId());
                    
                    $this->flashMessage("Регистрация прошла успешно");
                    $this->toolkit->redirect("/");
                } 
            }
            
        }//end: doRegister
        
        public function doEdit() {
            $this->setFormDatasource($this->toolkit->getUser(), 'profile_form');
            
            if($this->request->has('change_password')) {
                $this->_changeUserPassword();
            }
            
            if ($this->request->has('edit')) {
                $this->_updateUserProfile();
            }
        }
        
        protected function _changeUserPassword() {
            $this->useForm('change_password_form');
            $this->_validateChangePasswordForm();
            
            if ($this->error_list->isValid()) {
                $user = $this->toolkit->getUser();
                
                $user->setPassword($this->request->get("password"));
                $user->save();
                
                $this->flashMessage('Password was change');
                $this->toolkit->redirect();
            }
        }
        
        protected function _validateChangePasswordForm() {
            $this->validator->addRequiredRule('old_password');
            $this->_validatePasswordField();

            $user = $this->toolkit->getUser();
            $old_password = $this->request->get('old_password');
            
            if($old_password) {
                $hashed_password = $user->cryptPassword($old_password);
                
                if($user->getHashedPassword() != $hashed_password)
                    $this->error_list->addError('Wrong old password', array('old_password'));
            }
        }        

        protected function _updateUserProfile() {
            $this->useForm('profile_form');
            $this->setFormDatasource($this->toolkit->getUser());
            
            $user_properties= $this->request->getPost(array("login", "name", "email", "password", "address"));
            
            $user = $this->toolkit->getUser();
            $user->import($user_properties);
            
            if ($user->trySave($this->error_list)) {
                $this->flashMessage('Profile is changed');
                $this->toolkit->redirect();
            }
        }
        
        protected function _validatePasswordField() {
            
            $this->validator->addRequiredRule("password");
            $this->validator->addRequiredRule("repeated_password");
            
            lmb_require("limb/validation/src/rule/lmbMatchRule.class.php");
            
            $this->validator->addRule(new lmbMatchRule('password', 'repeated_password'));
            $this->validator->validate($this->request);
            
        }//end: _validatePasswordField()
          
    }//end: class UserController
?>
