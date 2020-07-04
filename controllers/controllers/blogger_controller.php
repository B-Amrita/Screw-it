<?php

class BloggerController {

    
   public function about() {

      $bloggers = Blogger::getallBloggerprofiles();
      require_once('views/pages/about.php');

 }
          

    public function dashboard() {
        if(isset($_SESSION['user_id'])) {
      
            $blogger = Blogger::getProfile(($_SESSION['user_id']));
            $blogs = Blogger::getCountBlogs(($_SESSION['user_id']));
            $comments = Blogger::getCountComments(($_SESSION['user_id']));
            $blogsfavscomments = Blogger::getBlogsFavsComments(($_SESSION['user_id'])); 
            $commenttext = Blogger::getComments(($_SESSION['user_id'])); 
                    
// Functions
        function deleteComment($commentID){
            Blogger::deleteComment($commentID);
        }
        if (isset($_GET['req'])){
            deleteComment($_GET['commentID']);
            echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
        }
            
        function delete($user_id) {
            Blogger::deleteAccount($user_id);
            }
        if (isset($_GET['delreq'])){
              delete($_GET['user_id']);  
            }
           
          //  require_once('Views/pages/home.php');

      }
        
          
           // $blogcontents = Blogger::getUserBlogs($_SESSION['user_id']);
            require_once('views/pages/bloggersdash.php');
            
           if($_SERVER['REQUEST_METHOD'] == 'POST'){ $id = $blogger[0];
           Blogger::updateProfile($id);

}}}
   

   
    /*
        public function delete() {
            Blogger::deleteAccount($_GET['user_id']);
          //  require_once('Views/pages/home.php');

      }
}*/
     
   /*   
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if (!isset($_GET['user_id']))
        return call('pages', 'error');

        // we use the given id to get the correct user
        $product = Blogger::getProfile($_GET['user_id']);
      
        require_once('views/pages/Bloggerdashboard.php');
        }
      else
          { 
            $id = $_GET['user_id'];
            Blogger::updateProfile($id);
           // header("Location: index.php?controller=blogger&action=dashboard"); 
      }
      
    }*/
    





/*    
   public function bloggerdashboard() {
        require_once('views/pages/Bloggerdashboard.php');
        $usn = $_SESSION['username'];
        $blogger = User::getUser($usn);
        return $blogger;
    }

}*/
  