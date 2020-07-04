 <?php 
 //include_once 'models/post_comment.php';
 
 if(isset($_SESSION['loggedin'])) { 
     echo '       

        <div class="comment-container" style="width:52%;">
            <form method="POST" id="comment_form" action="">
                <div class="form-group">
                  <b>  <label for="exampleFormControlTextarea1" style="text-align: center; ">COMMENTS</label></b>
                    <textarea class="form-control" id="comment_content" rows="4" placeholder="write your comment here" name="comment_content"></textarea>
                </div>
                <div class="pure-form pure-form-aligned container-btn form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0"/>               
                    <input type="submit" value="comment" name= "submit" id="button" class="btn btn-info" style="float:right;" >
                </div>         
    </div>
    

 ' ;}  else {
     echo "<p style='text-align: center; color: #3F7CAC;'>Want to comment? "
     . "Why not<a href='?controller=register&action=registerUser' style='text-decoration: none; "
             . "text-transform:bold;'> sign up </a>and become a member or <a href='?controller=login&action=loginUser' "
             . "style='text-decoration: none; text-transform:bold;'> log in</a></p>";
 } ?> 

<div class="comment-container" style="width:52%;">
            </form>
            <span id="comment_message"></span>
            <br/>
            <div id="display_comment">
             <div class="panel panel-default">
              
             </div>
                 
            </div>
        </div>

            
<!--                          REPLIES-->
            
<!--            <?php // if(isset($_SESSION['loggedin'])) { 
//     echo '
//
// <div class="comment-container">
//            <form method="POST" id="reply_form" action="">
//                <div class="form-group">
//                    <textarea class="form-control" id="exampleFormControlTextarea1 comment_content" rows="3" placeholder="write your reply here" name="comment_content"></textarea>
//                </div>
//                <div class="pure-form pure-form-aligned container-btn form-group">
//                <input type="hidden" name="reply_id" id ="comment_id" value="0"/>
//                    <input type="submit" value="REPLY" name= "submit" id="button" class="btn btn-info" style="float:right;" >
//                </div>         
//    </div>
//     ' ;} else  {
//         echo"";
//     }
//?>
       

<div class="comment-container">
            </form>
            <span id="reply_message"></span>
            <br/>
            <div id="reply_comment">
             <div class="panel panel-default">
              
             </div>
                 
            </div>
        </div>-->





    <?php if (!isset($_SESSION['loggedin'])): ?>

        <p style='text-align: center; color: #3F7CAC;'>Want to comment? Why not
            <a href='?controller=register&action=registerUser' style='text-decoration: none; 
                     text-transform:bold;'> sign up </a>and become a member or <a href='?controller=login&action=loginUser' 
                  style='text-decoration: none; text-transform:bold;'> log in</a></p>";


        <div class="comment-container" style="width:52%;">
        </form>
        <span id="comment_message"></span>
        <br/>
        <div id="display_comment">
            <div class="panel panel-default">

            </div>

        </div>
        </div>
    <?php endif; ?>

                  
                          <div style='margin-top: 40px;' class="comment-title"><h4> comments</h4> </div>
    <?php if (isset($_SESSION['loggedin'])): ?>

        <form method='POST' action="" enctype="multipart/form-data">
            <textarea style='width:700px; resize: none;' name='message' rows='4'></textarea><br>
            <input style='width:100px; height: 40px; background-color:#fca15f; border:none; font-weight: 400; border-radius: 8px; cursor: pointer;' type='submit' value='Comment' name='submit'>
        </form>
      
        
        <?php endif; ?>
        
        <?php if (!isset($_SESSION['loggedin'])): ?>

        <p style='text-align: center; color: #3F7CAC;'>Want to comment? Why not
            <a href='?controller=register&action=registerUser' style='text-decoration: none; 
                     text-transform:bold;'> sign up </a>and become a member or <a href='?controller=login&action=loginUser' 
                  style='text-decoration: none; text-transform:bold;'> log in</a></p>";
                  <?php endif; ?>
      