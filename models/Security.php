<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Security
 *
 * @author linzicarlin
 */
class Security {
    
    public $username;
    public $answer_1;
    
    public function __construct() {
        $this->username = $username;
        $this->answer_1 = $answer_1;
    }

    public static function securityQuestionLogin(){
        
        $db = Screw_it::getInstance();

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['answer_1']) && $_POST['answer_1'] != "") {
            $filteredAnswer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);
            //$hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }

        $username = $filteredUsername;
        $answer_1 = $filteredAnswer_1;

        $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");
        
        $stmt->bindParam(":username", $username);

        $stmt->execute(array(':username' => $username));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            if (password_verify($answer_1, $user['answer_1'])) {
                
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $user['username'];
                $_SESSION["user_id"] = $user['user_id']; 
                $_SESSION["user_type"] = $user['user_type'];
                 echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";// will send to member dashboard
            } else {
                echo "Something went wrong. Please try again";
            }
            //verify password
        }
        
        
    }
    
}
