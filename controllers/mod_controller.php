<?php

Class modController {
    
public function showAll(){

    if(isset($_SESSION['user_id'])) {   
        
        //S T A T S
        
        //Comments Count
        $commsCount = Mod::commentsCount();
        $commsCountLW = Mod::commentsCount();
        
        // Blogs Count
        $blogsCount = Mod::blogsCount();
        $blogsCountLW = Mod::blogsCountLW();
        
        //user count
        $memCount = Mod::memberCount();
        $memCountLW = Mod::memberCountLW();
        
        //blogger count
        $bloggerCount = Mod::bloggerCount();
        $bloggerCountLW = Mod::bloggerCountLW();
        
        // Likes Count
        $likesCount = Mod::likesCount();
        $likesCountLW = Mod::likesCountLW();
        
        // replies count
        $repliesCount = Mod::repliesCount();
        $repliesCountLW = Mod::repliesCountLW();
        //print_r($bloggerCount);
        
        //All users - locked
        $users = Mod::getAllusers();
        
        //All users - locked
        $usersL = Mod::getAllUsersLocked();


            
        // Gets the member details
            
            $details = Mod::getDetails(($_SESSION['user_id']));
            

            
        // Gets the member details    
            
            $favourites = Mod::getFavourites(($_SESSION['user_id']));
             
            
        // Gets the comments details
            
            $comms = Mod::getComments10();
        
        // Functions
        function deleteComment($commentID){
            Mod::deleteComment($commentID);
            echo "<script>$('#myModal').modal('show');</script>";
            echo "<script>window.location.replace('?controller=mod&action=showAll&resp=success')</script>";
        }
        if (isset($_GET['req'])){
            deleteComment($_GET['commentID']);
        }
        
        function lockUser($user_id){
           Mod::lockUser($user_id);
           //echo $_POST['lockUser'];
        }
        
        function unlockUser($user_id){
           Mod::unlockUser($user_id);
           //echo $_POST['lockUser'];
        }

        // LOCK USER
        if (!empty($_POST['lockUser'])){
            lockUser($_POST['lockUser']);
            echo "<script>window.location.replace('?controller=mod&action=showAll&res=locked&user')</script>";
        } 
        
                // LOCK USER
        if (!empty($_POST['unlockUser'])){
            unlockUser($_POST['unlockUser']);
            echo "<script>window.location.replace('?controller=mod&action=showAll&unlock=true')</script>";
        } 
            
            
        //if (isset($_GET('function'))){
            //deleteComment($userID);
        ///}
        //else echo "nice try!";
            require_once('views/pages/mod_page.php');

    } 
    
    else {
        return call('pages', 'error');
    }
    
    
}
}
