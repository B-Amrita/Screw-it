<?php
 include_once $_SERVER ['DOCUMENT_ROOT'] .DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR.'connection.php';

class CommentsController {
    
 
    }

//    
//   public function add() {
//         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
////             echo $_REQUEST['comment'];
//             $blog_id =($_GET['blog_id']);
//               Comments::addComment($_GET['blog_id']);
//
//         }
//
//   }
//   
//    public function post() {
//        
//        if (isset($_GET['blog_id'])) {
//
//        try {
//            // we use the given id to get the correct post
//             Comments::postComment($_GET['blog_id']);
//           // require_once('views/blogpost/read.php');
//            
//        } catch (Exception $ex) {
//            return call('pages', 'error');
//        }
//               
//         }

    if(isset($_POST['comment_sent'])){
        
        $user_id = $_POST['user_id'];
        $blog_id = $_POST['blog_id'];
        
        $mainComment = $_POST['mainComment'];
        
        $req = Comments::setComments($blog_id, $user_id,$mainComment);
    }
  



  