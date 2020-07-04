<?php


/**
 * Description of forgot_password_controller
 *
 * @author linzicarlin
 */
class SecurityController {

    public function loginUserSecurity() {

   
        //check if session is set. If set redirect
        if (!isset($_SESSION['loggedin'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                Security::securityQuestionLogin();
               echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";
            }
        } else {

            echo 'You are already logged in!';
        }     
        require_once('views/pages/forgot_password_page.php');
    }

}
