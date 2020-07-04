<?php

class Blog {

    public $title;
    public $body;
//    public $body2;
    public $date_posted;
    //public $tag;
//    public $main_image;
//    public $second_image;
    public $third_image;
//    public $category;
//    public $facebook_url;
//    public $insta_url;
//    public $twitter_url;
    public $username;

    function __construct($title, $body, $date_posted, $username, $third_image) {

        $this->title = $title;
        $this->body = $body;
//        $this->body2 = $body2;
        $this->date_posted = $date_posted;
//        $this->main_image = $main_image;
//        $this->second_image = $second_image;
        $this->third_image = $third_image;
//        $this->category = $category;
        //$this->tag= $tag;
//        $this->facebook_url = $facebook_url;
//        $this->insta_url = $insta_url;
//        $this->twitter_url = $twitter_url;
        $this->username = $username;
    }

    public static function all() {
        $list = [];
        $db = Screw_it::getInstance();
        $req = $db->query("SELECT * FROM blog_posts; 
                          INNER JOIN Users ON blog_posts.user_id = Users.user_id WHERE blog_id = :blog_id;"); //order by most recent *ASK MARTINA*
        // we create a list of blog_post objects from the database results
        foreach ($req->fetch(PDO::FETCH_ASSOC) as $blog) {
            $list[] = new Blog($blog['user_id'], $blog['title'], $blog['body'], $blog['date_posted'], $blog['category'], $blog['main_image'], $blog['second_image'], $blog['third_image'], $blog['views'], $blog['slug'], $blog['favourite']);
        }
        return $list;
    }

    public static function find($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);
        $req = $db->prepare('SELECT * FROM blog_posts
                             INNER JOIN Users ON blog_posts.user_id = Users.user_id 
                             WHERE blog_id = :blog_id;'); //get blog_posts and information from users table to assign first and last name


        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('blog_id' => $blog_id));
        $blog = $req->fetch();

        return $blog;
    }

    public static function findTagForBlog($blog_id) {
        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);
        $req = $db->prepare('SELECT * FROM blog_tags 
                             WHERE blog_id = :blog_id;');

        /* while ($row = $req->fetchAll) {
          $tag = $row['tag'];
          echo $tag;
          } */
        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('blog_id' => $blog_id));
        $tag = $req->fetchAll(PDO::FETCH_COLUMN, 1);

        return $tag;
    }

    public static function getTag() {
        $db = Screw_it::getInstance();

        $req = $db->query("SELECT * FROM tags;")->fetchAll(PDO::FETCH_COLUMN); //get tags
        $tag = $req;
        return $tag;
    }

    public function getComments($blog_id) {
        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $query = "SELECT * FROM comments
         INNER JOIN Users ON comments.user_id = users.user_id
         WHERE blog_id = :blog_id
         ";

        $stmt = $db->prepare($query);

        $stmt->execute(array(
        ':blog_id' => $blog_id));
//fetch all the comments and use a foreach loop to show each comment
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $comments = $result;

        return $comments;
        
         
        }
        

        public static function update($blog_id) {
        $db = Screw_it::getInstance();

        $blog_id = intval($blog_id);
        if (isset($_POST['title']) && $_POST['title'] != "") {
        $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body']) && $_POST['body'] != "") {
            $filteredBody = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body2']) && $_POST['body2']) {
            $filteredBody2 = filter_input(INPUT_POST, 'body2', FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            $filteredBody2 = "";
        }

        if (isset($_POST['category']) && $_POST['category'] != "") {
            $filteredCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['layout']) && $_POST['layout'] != "") {
            $filteredLayout = filter_input(INPUT_POST, 'layout', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if (isset($_POST['published']) && $_POST['published'] != "") {
            $filteredPublished = filter_input(INPUT_POST, 'published', FILTER_SANITIZE_SPECIAL_CHARS);
        }

            $pattern = '/;&#[0-9][0-9];/';
           $replacement = "<br/>";


        $filteredBody = preg_replace($pattern, $replacement, $filteredBody);
        $filteredBody2 = preg_replace($pattern, $replacement, $filteredBody2);

        if (!empty($_POST['file[]'])) {
            $filteredImage = filter_input(INPUT_POST, 'myfile[]', FILTER_SANITIZE_SPECIAL_CHARS);

            //$filteredImage = $_FILES['myfile']['name'];
            foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

                $temp = $_FILES["myfile"]["tmp_name"][$key];
                $imagename = $_FILES["myfile"]["name"][$key];   //save this in the db!!

                $img1 = $_FILES["myfile"]["name"][0];
                $img2 = $_FILES["myfile"]["name"][1];
                $img3 = $_FILES["myfile"]["name"][2];
            }
            $location = "views/images/";
            //creates a file path for each image uploaded
            $file_path1 = $location . $img1;
            $file_path2 = $location . $img2;
            $file_path3 = $location . $img3;

            $req = $db->prepare("Update blog_posts SET main_image=:main_image, second_image=:second_image, third_image=:third_image WHERE blog_id= '" . $blog_id . "'; ");

            $req->bindParam(':main_image', $main_image);
            $req->bindParam(':second_image', $second_image);
            $req->bindParam(':third_image', $third_image);

            $main_image = $file_path1;
            $second_image = $file_path2;
            $third_image = $file_path3;
        } else {
            echo "";
        }

        $req = $db->prepare("Update blog_posts SET title=:title, body=:body, body2=:body2, category=:category,
                             layout=:layout, published=:published WHERE blog_id= '" . $blog_id . "';");

        $req->bindParam(':title', $title);
        $req->bindParam(':body', $body);
        $req->bindParam(':body2', $body2);
        $req->bindParam(':category', $category);
        $req->bindParam(':layout', $layout);
        $req->bindParam(':published', $published);

        $title = $filteredTitle;
        $body = $filteredBody;
        $body2 = $filteredBody2;
        $category = $filteredCategory;
        $layout = $filteredLayout;
        $published = $filteredPublished;

        $req->execute();

        if (!empty($_POST['tag'])) {
            
            $filteredTag = $_POST['tag'];
            $newtag = $filteredTag;
            
            //delete existing tags from db
            foreach ($newtag as $key => $tag1) {
                $deltag = $tag1;

                $req = $db->prepare("DELETE FROM blog_tags WHERE tag = :tag;");

                $req->bindParam(':tag', $tagdel);
                $tagdel = $deltag;

                $req->execute();
            }
                       
            //add new tags into the db
            foreach ($newtag as $key => $tags) {
                $tag2 = $tags;

                $req = $db->prepare("INSERT INTO blog_tags(blog_id, tag) VALUES ('" . $blog_id . "', :tag);");

                $req->bindParam(':tag', $tag);
                $tag = $tag2;

                $req->execute();
            }
        } 

        if (!isset($_FILES['myfile']['name'])) {
            Blog::uploadFiles($imagename);
        } else {
            echo "";
        }
//         Blog::updateImages($imagename);
//upload product image if it exists
        echo '<h3 style="text-align:center; margin-top:30px; margin-bottom:20px;"> Your blog has been updated,<br> you will be redirected to your blogpost to view your changes!</h3>'
        . '<img style="display: block; margin-left: auto; margin-right: auto; width: 40%;" src="views/images/bloguploaded.png"/>';
//        
        echo '<meta http-equiv="refresh" content="5;  url=?controller=blog&action=read&blog_id=' . $blog_id . '"/>';
        //echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
    }

    public static function deleteTags($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $req = $db->prepare("DELETE FROM blog_tags WHERE blog_id = :blog_id;");
        $req->execute(array('blog_id' => $blog_id));
    }

    public static function add() {

        $db = Screw_it::getInstance();

        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body']) && $_POST['body'] != "") {
            $filteredBody = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['body2']) && $_POST['body2'] != "") {
            $filteredBody2 = filter_input(INPUT_POST, 'body2', FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            $filteredBody2 = "";
        }
        if (isset($_POST['category']) && $_POST['category'] != "") {
            $filteredCategory = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['layout']) && $_POST['layout'] != "") {
            $filteredLayout = filter_input(INPUT_POST, 'layout', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['published'])) {
            $filteredPublished = filter_input(INPUT_POST, 'published', FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            $filteredPublished = 'published';
        }

        $filteredImage = filter_input(INPUT_POST, 'myfile[]', FILTER_SANITIZE_SPECIAL_CHARS);

        $pattern = '/;&#[0-9][0-9];/';
        $replacement = "<br/>";


        $filteredBody = preg_replace($pattern, $replacement, $filteredBody);
        $filteredBody2 = preg_replace($pattern, $replacement, $filteredBody2);



        //$filteredImage = $_FILES['myfile']['name'];
        foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

            $temp = $_FILES["myfile"]["tmp_name"][$key];
            $imagename = $_FILES["myfile"]["name"][$key];   //save this in the db!!

            $img1 = $_FILES["myfile"]["name"][0];
            $img2 = $_FILES["myfile"]["name"][1];
            $img3 = $_FILES["myfile"]["name"][2];
        }
        $location = "views/images/";
        //creates a file path for each image uploaded
        $file_path1 = $location . $img1;
        $file_path2 = $location . $img2;
        $file_path3 = $location . $img3;

        $req = $db->prepare("INSERT INTO blog_posts(user_id, title, body, body2, category, main_image, second_image, third_image, layout, published) 
                                VALUES ('" . $_SESSION['user_id'] . "', :title, :body, :body2, :category, :main_image, :second_image, :third_image, :layout, :published);
                               ");

        $req->bindParam(':title', $title);
        $req->bindParam(':body', $body);
        $req->bindParam(':body2', $body2);
        $req->bindParam(':category', $category);
        $req->bindParam(':main_image', $main_image);
        $req->bindParam(':second_image', $second_image);
        $req->bindParam(':third_image', $third_image);
        $req->bindParam(':layout', $layout);
        $req->bindParam(':published', $published);

        $title = $filteredTitle;
        $body = $filteredBody;
        $body2 = $filteredBody2;
        $category = $filteredCategory;
        $main_image = $file_path1;
        $second_image = $file_path2;
        $third_image = $file_path3;
        $layout = $filteredLayout;
        $published = $filteredPublished;

        $req->execute();
        $id = $db->lastInsertId();

//         if (isset($_POST['tag']) && $_POST['tag'] !== "") {
        if (empty($_POST['tag'])) {
            echo"";
        } else {
            $filteredTag = $_POST['tag'];

            $newtag = $filteredTag;


            foreach ($newtag as $key => $tags) {
                $tag2 = $tags;

                $req = $db->prepare("INSERT INTO blog_tags(blog_id, tag) VALUES (:blog_id, :tag);");

                $req->bindParam('tag', $tag);
                $req->bindParam('blog_id', $last_id);

                $tag = $tag2;
                $last_id = $id;

                $req->execute();
            }
        }
        //} else {"no tags selected" ;}
        //upload product image:  
        Blog::uploadFiles($imagename);
        echo '<h3 style="text-align:center; margin-top:30px; margin-bottom:20px;"> Your blog has been uploaded!</h3>'
        . '<img style="display: block; margin-left: auto; margin-right: auto; width: 40%;" src="views/images/bloguploaded.png"/>';
        
        //redirect blogger to the post they just created wher
if($filteredLayout == '1') {
        echo '<meta http-equiv="refresh" content="4;  url=?controller=blog&action=read&blog_id= '.$id.'" />';
} else {
     echo '<meta http-equiv="refresh" content="4;  url=?controller=blog&action=read2&blog_id= '.$id.'" />';
}

    }

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'myfile[]';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFiles($imagename) {

        $db = Screw_it::getInstance();

        foreach ($_FILES["myfile"]["tmp_name"] as $key => $tmp_name) {

            $temp = $_FILES["myfile"]["tmp_name"][$key];
            $imagename = $_FILES["myfile"]["name"][$key];
            $file_type = $_FILES["myfile"]["type"][$key];
            //save this in the db!!

            if (empty($_FILES["myfile"]["tmp_name"])) {
                die("File Missing! <br>");
            } else {
                echo "";
            }

            if (isset($_FILES["myfile"]["tmp_name"][2])) {
                echo"";
            } else {
                die("Please upload 3 images<br>");
            }

            if (!in_array($_FILES["myfile"]["type"], self::AllowedTypes)) {
                echo("<p style='text-align:center; margin:0; margin-top:10px;'>File type not allowed</p> ");
            } else {
                echo "";
            }

            //$tempFile = $_FILES[self::InputKey]['tmp_name']; 
            $path = DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
            $destinationFile = $path . $imagename;


            move_uploaded_file($temp, $destinationFile);
            //(move_uploaded_file($_FILES[self::InputKey]['tmp_name'], $destinationFile));
            if (!move_uploaded_file($temp, $destinationFile)) { //file does upload not usre why throwing error?
                echo ("<p style='text-align:center; margin:0;'>File not uploaded or images already exist! </p><br>");
            } else {
                echo "your files have uploaded";
            }

            //Clean up the temp file
            if (file_exists($temp)) {
                unlink($temp);
            }
        }
    }

    public function moreBlogs() {
        $db = Screw_it::getInstance();

        $query = "SELECT * FROM blog_posts 
                            INNER JOIN Users ON blog_posts.user_id = users.user_id
                            WHERE user_type = 'Blogger'
                            ORDER BY RAND() 
                            LIMIT 3;";
        $req = $db->prepare($query);
        $req->execute();
        $list = $req->fetchAll(PDO::FETCH_ASSOC);


        return $list;
    }

    public static function remove($blog_id) {
        $db = Screw_it::getInstance();
        //make sure $id is an integer
        $blog_id = intval($blog_id);
        $req = $db->prepare("delete FROM blog_posts WHERE blog_id = :blog_id;");
        // the query was prepared, now replace :id with the actual $id value

        $req->execute(array('blog_id' => $blog_id));

        echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
    }

    public static function getlikes($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $query = "SELECT count(*) FROM favourites WHERE blog_id = '" . $blog_id . "'";
        $req = $db->prepare($query);
        $req->execute();
        $likes = $req->fetch();

        return $likes['count(*)'];
    }

    public static function addlikes($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $req = $db->prepare("INSERT INTO favourites(blog_id, user_id) 
                             VALUES('" . $blog_id . "', '" . $_SESSION["user_id"] . "');");
        $req->execute();

        echo '<meta http-equiv="refresh" content="0;  url=?controller=blog&action=read&blog_id=' . $blog_id . '"/>';
    }
    
    public static function unlike($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $req = $db->prepare("DELETE FROM favourites WHERE blog_id = '".$blog_id."' AND user_id = '" . $_SESSION["user_id"] . "'");
        $req->execute();

        echo '<meta http-equiv="refresh" content="0;  url=?controller=blog&action=read&blog_id=' . $blog_id . '"/>';
    }
    
    public static function favCount($blog_id) {

        $db = Screw_it::getInstance();
        $blog_id = intval($blog_id);

        $req = $db->prepare("SELECT count(*) FROM favourites WHERE
                             blog_id = '".$blog_id."'");
        $req->execute();
        $fav_count = $req->fetch();
        //$fav_count = count($favourite);
        return $fav_count['count(*)'];
        
    //echo '<meta http-equiv="refresh" content="0;  url=?controller=blog&action=read&blog_id=' . $blog_id . '"/>';
    }
    

    // COMMENTS SECTION

//    public function setComment($user_id, $blog_id) {
//        $db = Screw_it::getInstance();
//
//        $blog_id = intval($blog_id);
//        $user_id = intval($user_id);
//
//        if (isset($_POST['comment']) && $_POST['comment'] != "") {
//            $filteredComment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
//        }
//        $comment = $filteredComment;
//
//        $sql = "insert into comments (comment, parent_comment_id, blog_id, user_id)
//                VALUES ( :comment, '0', :blog_id, :user_id);";
//
//        $stmt = $db->prepare($sql);
//        $stmt->execute(array('user_id' => $user_id,
//            'blog_id' => $blog_id,
//            'comment' => $comment));
//    }

    public static function getCommentCount($blog_id) {

        $db = Screw_it::getInstance();

        $blog_id = intval($blog_id);
        
       $query = "SELECT count(*) FROM comments WHERE blog_id = '" . $blog_id . "'";
        $req = $db->prepare($query);
        $req->execute();
        $comment_count = $req->fetch();

        return $comment_count['count(*)'];
 
    }

}
