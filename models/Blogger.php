<?php

include 'Users.php';

class Blogger extends Users {

    protected $bio;
    protected $twitter_url;
    protected $insta_url;
    protected $facebook_url;
            
    function getBio() {
        return $this->bio;
    }

    function getUrl() {
        return $this->url;
    }

    function setBio($bio) {
        $this->bio = $bio;
    }

    function setUrl($url) {
        $this->bio = $url;
    }
    

    public function __construct($bio, $url) {
        $this->bio = $bio;
        $this->url = $url;
    }

  
    public function getallBloggerprofiles() {
      $db = Screw_it::getInstance();
      
            $query = "SELECT user_fn, user_ln, profile_pic, bio, twitter_url, insta_url, facebook_url, date_joined  FROM Users WHERE user_type = 'Blogger' ORDER BY date_joined ASC";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $bloggerprofiles = $stmt->fetchall(PDO::FETCH_ASSOC);
        
            return  $bloggerprofiles;

    }

    public function getCountBlogs($user_id) {
      $db = Screw_it::getInstance();
      
            $user_id = intval($user_id);
      
            $query = "SELECT count(*) FROM blog_posts WHERE user_id = :user_id;";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
            $stmt->execute();
            $blogs = $stmt->fetch();
        
            return  $blogs['count(*)'];

    }
    
        public function getCountComments($user_id) {
      $db = Screw_it::getInstance();
      
            $user_id = intval($user_id);
      
            $query = "SELECT count(*) FROM comments WHERE user_id = :user_id;";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
            $stmt->execute();
            $comments = $stmt->fetch();
        
            return  $comments['count(*)'];
    }

        public function getProfile($user_id) {
        $db = Screw_it::getInstance();
        
        $user_id = intval($user_id);
        
        $query = "SELECT * FROM users WHERE user_id = :user_id;";
        $stmt = $db->prepare($query);
        $stmt->execute(array('user_id' => $user_id));
        $blogger_profile = $stmt->fetch();
        $profile = $blogger_profile;
        
        return $profile;
        
    }

    
    public static function updateProfile($user_id) {
        $db = Screw_it::getInstance(); 

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['bio']) && $_POST['bio'] != "") {
            $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
        }
     // if (isset($_POST['dob']) && $_POST['dob'] != "") {
     //       $filtereddob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
     //   }
        if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['facebook']) && $_POST['facebook'] != "") {
            $facebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_URL);
        }
        if (isset($_POST['twitter']) && $_POST['twitter'] != "") {
            $twitter = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_URL);
        }
        if (isset($_POST['insta']) && $_POST['insta'] != "") {
            $insta = filter_input(INPUT_POST, 'insta', FILTER_SANITIZE_URL);
        }
        
                //if a new image is uploaded - upload and replace it
        if ($_FILES['profile_pic']['size'] > 0) {
            $name = $_FILES['profile_pic']['name'];
            $imagepath = "Views/images/profile_pics/" . $name;
            self::uploadImage($imagepath);
            //if no new blog image is uploaded - keep the original one
        } elseif ($_FILES['profile_pic']['size'] == 0) {
            $stmt = $db->prepare("SELECT profile_pic from users WHERE user_id = $user_id");
            $stmt->execute();
            $existingimage = $stmt->fetchAll();
            $imagepath = $existingimage['0']['profile_pic'];
        }
       //if (isset($_POST['profile_pic']) && $_POST['profile_pic'] != "") {
       //    $filteredimage = "Views/images/".filter_input(INPUT_POST,'profile_pic', FILTER_SANITIZE_SPECIAL_CHARS);
       // }
        
   
        $profilepic = $imagepath;
        //$profilepic = $filteredimage;
        
        /* removed -- , profile_pic=:profile_pic, dob=:dob, from query*/
        
        $req = $db->prepare("Update Users set username=:username, bio=:bio,  user_fn=:user_fn, user_ln=:user_ln, email=:email, twitter_url=:twitter, insta_url=:insta, facebook_url=:facebook, profile_pic=:profile_pic WHERE user_id=:user_id;");
        $req->bindParam(':user_id', $user_id);
        $req->bindParam(':username', $username);
        $req->bindParam(':bio', $bio);
       // $req->bindParam(':dob', $dob);
        $req->bindParam(':user_fn', $fn);
        $req->bindParam(':user_ln', $ln);
        $req->bindParam(':email', $email);
        $req->bindParam(':twitter', $twitter);
        $req->bindParam(':insta', $insta);
        $req->bindParam(':facebook', $facebook);
        $req->bindParam(':profile_pic', $profilepic);
        
        $req->execute();
        
        echo "<script type='text/javascript'>location.href = '?controller=blogger&action=dashboard';</script>";
        /*upload profile image if it exists
        if (!empty($_FILES[self::InputKey]['profile_pic'])) {
		Blogger::uploadImage($profilepic);*/
	}
    //}
   
    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    const InputKey = 'profile_pic';
      
    public function uploadImage($imagepath) {
           $db = Screw_it::getInstance();
            
            $temp = $_FILES["profile_pic"]["tmp_name"];
            $imagename = $_FILES["profile_pic"]["name"];  
            $file_type = $_FILES["profile_pic"]["type"];
            
         $path = DIRECTORY_SEPARATOR . 'Applications' . DIRECTORY_SEPARATOR . 'XAMPP' . DIRECTORY_SEPARATOR . 'xamppfiles' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'profile_pics' . DIRECTORY_SEPARATOR;
         $destinationFile = $path . $imagename;
        

        move_uploaded_file($temp, $destinationFile);
        
            $error = $_FILES[self::InputKey]['error'];

//        if($error === 0) {
            
	//if (!move_uploaded_file($tempFile, $destinationFile)) {
	//	echo "oops";            
        } 
       // if (file_exists($tempFile)) {
	//	unlink($tempFile); 
      // } 
        //}


    public function deleteAccount($user_id) {
      $db = Screw_it::getInstance();
      //make sure $id is an integer
      $user = intval($user_id);
      $req = $db->prepare('delete FROM Users WHERE user_id = :user_id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('user_id' => $user));

  }


public function getBlogsFavsComments($user_id) {
    $db = Screw_it::getInstance();
      $user_id = intval($user_id);
      $query = "SELECT b.blog_id, b.published, b.title, b.date_posted, COUNT(DISTINCT f.user_id) AS favourite_count, COUNT(DISTINCT c.comment) AS comment_count FROM blog_posts b LEFT JOIN favourites f ON f.blog_id = b.blog_id LEFT JOIN comments c ON c.blog_id = b.blog_id WHERE b.user_id = :user_id GROUP BY 1 ORDER BY b.date_posted ASC";
      $stmt = $db->prepare($query);
      $stmt->execute(array('user_id' => $user_id));
        //$results = $stmt->fetch();
        
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
        return $results;
    
}
   
    
          public function getComments($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select blog_posts.blog_id, 
                blog_posts.user_id as blogger,
                blog_posts.title,
                blog_posts.body,
                blog_posts.date_posted,
                blog_posts.category,
                comments.comment_id, 
                comments.comment,
                comments.parent_comment_id,
                comments.blog_id,
                comments.user_id as commenter,
                comments.comment_date,
                users.user_id as commenter,
                users.username,
                users.user_fn,
                users.user_ln,
                users.dob,
                users.profile_pic,
                users.date_joined
                    from blog_posts
                        inner join comments
                    on blog_posts.blog_id = comments.blog_id
                        inner join users
                    on comments.user_id = users.user_id
                WHERE users.user_id = :user_id;
                ORDER BY comments.comment_date desc";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
        $stmt->execute(array('user_id' => $user_id));
        $comms = $stmt->fetchAll();

        return $comms;
    }
    
     public function deleteComment($commentID){
        $db = Screw_it::getInstance();
        $sql = "delete from comments where comment_id = :commentid;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('commentid' => $commentID));
    }

     }
    
    /* I think this will need the blog model because it's trying to create a new class of blog... 
        public static function getUserBlogs($user_id) {
        $db = Screw_it::getInstance();
        $userid = intval($user_id);
        $list = [];
        $req = $db->prepare("SELECT blog_posts.blog_id, blog_posts.user_id, blog_posts.title, blog_posts.body, blog_posts.body2, blog_posts.main_image, blog_posts.date_posted, Users.user_fn, Users.user_ln, Users.profile_pic
                        FROM blog_posts
                        INNER JOIN Users ON blog_posts.user_id=Users.user_id WHERE blog_posts.user_ID = '" . $userid . "';");
        $req->execute();
        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog(
                    $blog['blog_id'], $blog['user_id'], $blog['title'], $blog['body'], $blog['body2'], $blog['main_image'], $blog['date_posted'], $blog['user_fn'], $blog['user_ln'], $blog['profile_pic']);
        }
        return $list;
    }
    */
    
