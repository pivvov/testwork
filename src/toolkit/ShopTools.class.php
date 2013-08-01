<?php
lmb_require('limb/toolkit/src/lmbAbstractTools.class.php');
lmb_require('src/model/User.class.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopTools
 *
 * @author IPivnenko
 */
class ShopTools extends lmbAbstractTools {
    
    protected $user;
    
    public function getUser() {
        
        if (is_object($this->user)) {
            return $this->user;
        }
        
        $session = lmbToolkit::instance()->getSession();
        $user_id = $session->get('user_id');
        
        if ($user_id) {
            
            try{
                $this->user = new User($user_id);
                $this->user->setIsLoggedIn(true);
            } catch (lmbARException $e) {
                $this->user = new User();
                $session->remove('user_id');
            }
            
        } else
            $this->user = new User(); 
        
        return $this->user;
    }
    
}

?>
