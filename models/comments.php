
<?php  include_once $_SERVER ['DOCUMENT_ROOT'] .DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR.'connection.php';



        
//        public static function getComment($blog_id){
            
//            $db = Screw_it::getInstance();
//            
//            $req = $db->prepare("SELECT * FROM comments WHERE blog_id = '".$blog_id."'");
//            $req->execute();
//            $row = $req->fetch(FETCH::ASSOC);
//            echo $row['comment'];
//        }
//    }

//    public function addComment($blog_id) {
//       
//        $db = Screw_it::getInstance();
//
//       $error = '';
//        $comment_content = '';
//        // $blog_id= '';
//
//        if (empty($_POST['comment_content'])) {
//            $error .= "<p class='text-danger'>Comment is required</p>";
//        } else {
//            $comment_content = filter_input(INPUT_POST, 'comment_content', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//
//        if ($error == '') {
//            $query = "INSERT INTO comments (parent_comment_id, comment, user_id, blog_id)
//                    VALUES (:parent_comment_id, :comment, '" . $_SESSION['user_id'] . "', ''".$blog_id."')";
//            $stmt = $db->prepare($query);
//
//            $stmt->execute(
//                    array(
//                        ':parent_comment_id' => $_POST["comment_id"],
//                        ':comment' => $comment_content
//                    )
//            );
//            $error = "<label class='text-success'>Comment added</label>";
//        }
//        $data = array(
//            'error' => $error
//        );
//        echo json_encode($data);
//    }
//
//    public function postComment($blog_id) {
//
//        $db = Screw_it::getInstance();
//
//        $output = '';
//
//        $query = "SELECT * FROM comments
//         INNER JOIN Users ON comments.user_id = users.user_id
//         WHERE parent_comment_id = '0' AND blog_id ='173'
//         ORDER BY comment_id DESC";
//
//        $stmt = $db->prepare($query);
//
//        $stmt->execute();
//
//        $result = $stmt->fetchAll();
//
//        foreach ($result as $row) {
//
//            $output .= '
//              <div class="comment" style="margin-top: 50px; color:black;">
//             <b> <div class="panel-heading username" style="font-size: 1.1em;"><span class="user-comment"> By ' . $row["username"] . ' </span></b><br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
//                  <div class="comment" style="margin-bottom:10px;" > ' . $row["comment"] . '</div>
//             
//                      <div class="panel-footer" align="left"><button type="button" class="btn btn-info reply" id= ' . $row["comment_id"] . '>
//                          <span class="reply" style="font-size: 0.8em; padding:0px;" >REPLY</span></button>
//                          </div>
//             </div>
//         
//';
//            $output .= get_reply_comment($db, $row["comment_id"]);
//        }
//
//        echo $output;
//
//
//        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//
//            $_GET['blog_id'];
//            echo $_GET['blog_id'];
//        }
//
//        function get_reply_comment($db, $parent_id = 0) {
//
//            $db = Screwit::getInstance();
//            $output = '';
//
//            $query = "SELECT * FROM comments 
//             INNER JOIN Users ON comments.user_id = users.user_id 
//             WHERE parent_comment_id = '" . $parent_id . "' AND blog_id = '173'
//        ";
//
//            $stmt = $db->prepare($query);
//            $stmt->execute();
//            $result = $stmt->fetchAll();
//            $count = $stmt->rowCount();
//
//
//            if ($count > 0) {
//                foreach ($result as $row) {
//
//                    $output = '';
//
//                    $output .= '
//                    <div class="reply-box" style= "margin-bottom: 50px; margin-top:12px; color: dark-grey;">
//               <b><div class ="username-reply" style="font-size: 1em;">' . $row["username"] . ' </b> <span style="font-size:0.85em;">replied</span>  '
//                            . '<br> <i style="font-size:0.8em;"> on ' . $row["comment_date"] . '</i> </div>
//                    <div class="comment-reply" style="margin-bottom:10px;" > ' . $row["comment"] . '</div> 
//                        <div align="left"><button type="button"  style=" margin-bottom:20px; size:5px;" class="btn btn-info reply" id=' . $row["comment_id"] . '>
//                          <span style="font-size: 0.8em; padding:0px;">REPLY</span></button>
//                </div> 
//  
//                
//                         ';
//
//                    $output .= get_reply_comment($db, $row["comment_id"]);
//                }
//            }
//
//            return $output;
//            //echo "<script type='text/javascript'>location.reload(true);</script>";
//        }
//
//    }
//
//    public function postReply() {
//        
//    }


