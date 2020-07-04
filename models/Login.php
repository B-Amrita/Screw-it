<?php 

/**
 * Description of Login
 *
 * @author linzicarlin
 */
class Login {

    public $username;
    public $password;
    public $answer_1;

    function __construct($username, $password, $answer_1) {

        $this->username = $username;
        $this->password = $password;
        $this->answer_1 = $answer_1;
    }

    public static function login() {

        $db = Screw_it::getInstance();
        
      

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            //$hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }

        $username = $filteredUsername;
        $password = $filteredPassword;

        $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");
        
        $stmt->bindParam(":username", $username);

        $stmt->execute(array(':username' => $username));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            // Checks if the user is a member and if the account is locked
            if ($user['user_type'] === "Member" && $user['Locked'] === "Y"){
                echo "<script type='text/javascript'>location.href = '?controller=login&action=loginUser&error=loginFailed';</script>";
            }
            else if (password_verify($password, $user['password'])) {
                
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $user['username'];
                $_SESSION["user_id"] = $user['user_id']; 
                $_SESSION["user_type"] = $user['user_type'];
                
                // Checks if the user is a mod, if yes, redirect
                if ($user['user_type'] === "Moderator"){
                    echo "<script type='text/javascript'>location.href = '?controller=mod&action=showAll';</script>";
                }
                else {
                    echo "<script type='text/javascript'>location.href = '?controller=home&action=home';</script>";
                }
                 //echo "Welcome!";// will send to member dashboard
            } else {
                echo "<script type='text/javascript'>location.href = '?controller=login&action=loginUser&result=loginFailed';</script>";
            }
            //verify password
        }
    }
    
    
            }


