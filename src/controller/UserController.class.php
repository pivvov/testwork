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
        
        protected function _validatePasswordField() {
            
            $this->validator->addRequiredRule("password");
            $this->validator->addRequiredRule("repeated_password");
            
            lmb_require("limb/validation/src/rule/lmbMatchRule.class.php");
            
            $this->validator->addRule(new lmbMatchRule('password', 'repeated_password'));
            $this->validator->validate($this->request);
            
        }//end: _validatePasswordField()
        
        public function doLogout() {
            $user = $this->toolkit->getUser();
            $user->logout();
            $this->toolkit->getSession()->remove('user_id');
            $this->response->redirect('/');
        } 
        
    }//end: class UserController
?>
