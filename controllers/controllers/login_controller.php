<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_controller
 *
 * @author linzicarlin
 */
class LoginController {
    
  /*      function loginUser() {
            
        if (!isset($_SESSION['loggedin'])) {
            
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
       require_once('views/pages/login_page.php');
      
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $product = Login::login();
      
        require_once('views/pages/home.php');
        }
      else
          { echo "error";
      }

    }*/
    
   
    public function loginUser() {
        
        if (isset($_GET['result'])){
            echo "<p style = 'font-size: 14px; color: red; padding-left: 2rem;'><br>Sorry, we couldn't validate those details! Please try again or use the <a style='color:red;' href='?controller=security&action=loginUserSecurity'>Forgotton your password?</a> link below.</p>";
        }
        

        
        
        //check if session is set. If set redirect
        if (!isset($_SESSION['loggedin'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                Login::login();
             echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";
            }
        } else {

            echo 'You are already logged in!';
        }
        
        if (isset($_GET['error'])){
            echo "<p style = 'font-size: 14px; color: red; padding-left: 2rem;'><br>Uh oh, your account has been locked! Please contact us!</p>";
        }
        require_once('views/pages/login_page.php');
    }


}
