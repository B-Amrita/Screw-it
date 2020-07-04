<?php

/**
 * Description of register_controller
 *
 * @author linzicarlin
 */
class RegisterController { //ive renamed this to RegisterController so it follows the naming style 

    public function registerUser() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //$userArray = Register::sanitiseInput();

            require_once('views/pages/register_page.php');
        } else {
            Register::addUser(); 
//            echo "<script type='text/javascript'>location.href = '?controller=login&action=loginUser';</script>"; //this will need to be removed place holder for redirect link to mem dashboard
            //when mem dashboard is created it should be called here so when the user has registered they'll be redirected to the
            //members page which will show their details based on their user_id and also start a session!
        }
    }

}

/*if (isset($_POST['submit'])){
    
$user = new Users();

try
{
	$newUser = $user->addUser();
}
catch (Exception $e)
{
	// Something went wrong: echo the exception message and die 
	echo $e->getMessage();
	die();
}
while ($row = mysqli_fetch_array($newUser)){

    echo "Welcome" . $row['username'];
}

}*/