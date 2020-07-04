<?php

class Register {

    public $username;
    public $password;
    public $user_fn;
    public $user_ln;
    public $email;
    public $dob;
    public $answer_1;

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'profile_pic';

    function __construct($username, $password, $user_fn, $user_ln, $email, $dob, $answer_1) {

        $this->username = $username;
        $this->password = $password;
        $this->user_fn = $user_fn;
        $this->user_ln = $user_ln;
        $this->email = $email;
        $this->dob = $dob;
        $this->answer_1 = $answer_1;
    }

    //moved contents of the sanitiseInput into the add user function!

    /* public function sanitiseInput() {

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
      $user_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
      $user_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $dob = $_POST['dob'];
      $answer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);

      $userArray->execute (['username' => $username, 'password' => $password, 'user_fn' => $user_fn, 'user_ln' => $user_ln, 'email' => $email, 'dob' => $dob, 'answer_1' => $answer_1]);

      return $userArray;
      } */

    public static function getDetails() {

        $userArray = [];
        $db = Screw_it::getInstance();
        //getInstance for db connection?

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            $hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }

        if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $filteredUser_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $filteredUser_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['dob']) && $_POST['dob'] != "") {
            $filteredDob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['answer_1']) && $_POST['answer_1'] != "") {
            $filteredAnswer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);
            $hashedAnswer_1 = password_hash($filteredAnswer_1, PASSWORD_BCRYPT);
        }

        $username = $filteredUsername;
        $password = $hashedPassword;
        $user_fn = $filteredUser_fn;
        $user_ln = $filteredUser_ln;
        $email = $filteredEmail;
        $dob = $filteredDob;
        $answer_1 = $hashedAnswer_1;

        //$userArray = ['username'=>$username, 'password'=>$password, 'user_fn'=>$user_fn, 'user_ln'=>$user_ln, 'email'=>$email, 'dob'=>$dob, 'answer_1'=>$answer_1];
        //return $userArray;
        //$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        //$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        //$user_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        //$user_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        //$dob = $_POST['dob'];
        //$answer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);

        $userArray = ['username' => $username, 'password' => $password, 'user_fn' => $user_fn, 'user_ln' => $user_ln, 'email' => $email, 'dob' => $dob, 'answer_1' => $answer_1];
        return $userArray;
    }

    public static function addUser() {
        $db = Screw_it::getInstance();
        //getInstance for db connection?

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            $hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }

        if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $filteredUser_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $filteredUser_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['dob']) && $_POST['dob'] != "") {
            $filteredDob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['answer_1']) && $_POST['answer_1'] != "") {
            $filteredAnswer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);
            $hashedAnswer_1 = password_hash($filteredAnswer_1, PASSWORD_BCRYPT);
        }
        
        //$filteredImage = filter_input(INPUT_POST, 'profile_pic', FILTER_SANITIZE_SPECIAL_CHARS);
        
            $temp = $_FILES["profile_pic"]["tmp_name"];
            $imagename = $_FILES["profile_pic"]["name"];   //save this in the db!!

            $profile_pic = $_FILES["profile_pic"]["name"];
            
             $location = "views/images/profile_pics/";
        //creates a file path for each image uploaded
        $file_path = $location . $profile_pic;


        $username = $filteredUsername;
        $password = $hashedPassword;
        $user_fn = $filteredUser_fn;
        $user_ln = $filteredUser_ln;
        $email = $filteredEmail;
        $dob = $filteredDob;
        $answer_1 = $hashedAnswer_1;
        $profile_pic = $file_path;
        

        

        $stmt = $db->prepare("INSERT INTO Users (username, password, user_fn, user_ln, email, dob, answer_1, profile_pic)
                 VALUES (:username, :password, :user_fn, :user_ln, :email, :dob, :answer_1, :profile_pic);");
        // Set parameters
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":user_fn", $user_fn);
        $stmt->bindParam(":user_ln", $user_ln);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":dob", $dob); //not string - yes it is!
        $stmt->bindParam(":answer_1", $answer_1);
        $stmt->bindParam(":profile_pic", $profile_pic);



        $stmt->execute();
        
        Register::uploadProfilePic($imagename);
        // Attempt to execute the prepared statement
        /* if ($stmt->execute()) {
          // Redirect to login page
          header("location: login.php");//change this
          } else {
          echo "Something went wrong. Please try again later.";
          }
          // Close statement
          unset($stmt); */
         echo '<h3 style="text-align:center; margin-top:30px; margin-bottom:20px;"> You have successfully registered, you will be re-directed to the log in page!</h3>'
        . '<img style="display: block; margin-left: auto; margin-right: auto; width: 40%;" src="views/images/welcomemessage.jpg"/>';
         
        echo '<meta http-equiv="refresh" content="4;  url=?controller=login&action=loginUser">';
    }

    public function usernameExists($userArray) {

        $db = Screw_it::getInstance();

        $username = $userArray['username'];

        $query = "SELECT username FROM users WHERE username = '$username'";

        $result = PDO::exec($query);


        //$result = mysqli_query($db, $query);
        //confirmQuery($result);

        if ($result > 0) {

            return true;
        } else {

            return false;
        }
    }

    public function uploadProfilePic($imagename) {
        $db = Screw_it::getInstance();



            $temp = $_FILES["profile_pic"]["tmp_name"];
            $imagename = $_FILES["profile_pic"]["name"];  
            $file_type = $_FILES["profile_pic"]["type"];
            //save this in the db!!

 

         /*if (!in_array($_FILES["profile_pic"]["tmp_name"], self::AllowedTypes)) {
          echo"<p style='text-align:center; margin:0; margin-top:10px;'>'File type not allowed</p>  ";
          } else {
          echo "";
          } */
      /*    
          if (!in_array($file_type, self::AllowedTypes)) {
            echo ("Handle File Type Not Allowed: ");
        }
*/
        //$tempFile = $_FILES[self::InputKey]['tmp_name']; 
        $path = DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'profile_pics' . DIRECTORY_SEPARATOR;
        $destinationFile = $path . $imagename;
        

        move_uploaded_file($temp, $destinationFile);
         if (!move_uploaded_file($temp, $destinationFile)) { //file does upload not usre why throwing error?
                echo ("<p style='text-align:center; margin:0;'>File not uploaded or images already exist! </p><br>");
            } else {
                echo "your files have uploaded";
            }
        //(move_uploaded_file($_FILES[self::InputKey]['tmp_name'], $destinationFile));
        /*if (!move_uploaded_file($temp, $destinationFile)) { //file does upload not usre why throwing error?
            echo "<p style='text-align:center; margin:0;'>File not uploaded or images already exist! </p><br>";
        } else {
            echo "your files have uploaded";
        }*/

        //Clean up the temp file
        if (file_exists($temp)) {
            unlink($temp);
        }
        
       
    }

}
