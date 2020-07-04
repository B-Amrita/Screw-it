<?php 

include_once $_SERVER ['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'connection.php';

$db = Screw_it::getInstance();

$error = '';
$comment_content = '';
$blog_id = '';
$user_id = '';


if(empty($_POST["comment_content"])) 
{
    
    $error .= '<p class="text-danger">Comment is required</p>';
    
} else 
    
{
    $comment_content = filter_input(INPUT_POST, 'comment_content', FILTER_SANITIZE_SPECIAL_CHARS);
    $blog_id = $_POST['blog_id']; 
    $user_id = $_POST['user_id']; 

    
}

if($error == '')
{
    $query= "INSERT INTO comments (comment, blog_id, user_id)
             VALUES (:comment, :blog_id, :user_id)";
    
    $stmt = $db->prepare($query);
    
    $stmt->execute(array(
        ':comment' => $comment_content,
        ':blog_id' => $blog_id,
        ':user_id' => $user_id
    ));
    
    $error = '<label class="text-success">Comment added</label>';
}

$data = array(
    'error' => $error
);

echo json_encode($data);
    
    


