<?php

class signout {
    
    
public static function signout_user() {

    
unset($_SESSION['user_id']);
unset($_SESSION['user_type']);
unset($_SESSION['loggedin']);
unset($_SESSION['username']);
session_destroy();

 echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";
}
}
