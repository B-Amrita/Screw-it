<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class signoutController {
    
    public function signout() {
        
        if (isset($_SESSION['loggedin'])) {
            
            signout::signout_user();
            echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";
        } else {
            echo "no";
        }
    }
}

