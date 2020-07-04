<?php

class dashboard {
    
   
    public function getCountLikes($user_id) {
      $db = Screw_it::getInstance();
      
            $user_id = intval($user_id);
      
            $query = "SELECT count(*) FROM favourites WHERE user_id = :user_id;";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
            $stmt->execute();
            $likes = $stmt->fetch();
        
            return  $likes['count(*)'];
    }

    public function getDetails($user_id) {
        $db = Screw_it::getInstance();

        $user_id = intval($user_id);

        $req = $db->prepare('SELECT * FROM users WHERE user_id = :user_id;');

        if (!$req) {
            echo "error, pls handle";
        }

        $req->execute(array('user_id' => $user_id));
        $mem_details = $req->fetch();
        $details = $mem_details;


        return $details;
    }

    public function getFavourites($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select blog_posts.*, favourites.*, users.*
                    from blog_posts
                        inner join favourites
                    on blog_posts.blog_id = favourites.blog_id
                        inner join users
                    on favourites.user_id = users.user_id
                WHERE users.user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
        $favourites = $stmt->fetchAll();

        return $favourites; 
        
}

    public function getComments($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select blog_posts.*, comments.*, users.*
                    from blog_posts
                        inner join comments
                    on blog_posts.blog_id = comments.blog_id
                        inner join users
                    on comments.user_id = users.user_id
                WHERE users.user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
        $comms = $stmt->fetchAll();

        return $comms;
    }

    public function getCountComments($user_id) {
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments where user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
        $commsCount = $stmt->fetchAll();
        return $commsCount;
    }

    public function deleteUser($user_id) {
        if (isset($_GET['user_id'])) {
            $id = $_GET['user_id'];
            $pdo->query("DELETE FROM Users WHERE user_id = :user_id;");
        }
        $deleteUser = $req->fetch();
        return $deleteUser;
    }

    /*public function unfavourite($user_id, $blog_id) {
        $db = Screw_it::getInstance();
        $sql = "DELETE FROM favourites WHERE user_id = :user_id and blog_id = :blog_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id,'blog_id' => $blog_id));
    */
    
        public function unfavourite($fav_id) {
        $db = Screw_it::getInstance();
        $sql = "DELETE FROM favourites WHERE fav_id = :fav_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('fav_id' => $fav_id));
    }
    
   
    public function deleteComment($comment_id) {
         $db = Screw_it::getInstance();
         $sql = "DELETE FROM comments WHERE comment_id = :comment_id;";
         $stmt = $db->prepare($sql);
         $stmt->execute(array('comment_id' => $comment_id));
    }
    
    // Update Profile
    
    public static function updateProfile($user_id) {
        $db = Screw_it::getInstance(); 

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['bio']) && $_POST['bio'] != "") {
            $filteredBio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
        }
     // if (isset($_POST['dob']) && $_POST['dob'] != "") {
     //       $filtereddob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
     //   }
        if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $filteredfn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $filteredln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['facebook']) && $_POST['facebook'] != "") {
            $filteredfacebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['twitter']) && $_POST['twitter'] != "") {
            $filteredtwitter = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['insta']) && $_POST['insta'] != "") {
            $filteredinsta = filter_input(INPUT_POST, 'insta', FILTER_SANITIZE_SPECIAL_CHARS);
        }
       //if (isset($_POST['profile_pic']) && $_POST['profile_pic'] != "") {
       //    $filteredimage = "Views/images/".filter_input(INPUT_POST,'profile_pic', FILTER_SANITIZE_SPECIAL_CHARS);
       // }
        
        $username = $filteredUsername;
        $bio = $filteredBio;
        //$dob = $filtereddob;
        $fn = $filteredfn;
        $ln = $filteredln;
        $email = $filteredemail;
        $twitter = $filteredtwitter;
        $insta = $filteredinsta;
        $facebook = $filteredfacebook;
        //$profilepic = $filteredimage;
        
        /* removed -- , profile_pic=:profile_pic, dob=:dob, from query*/
        
        $req = $db->prepare("Update Users set username=:username, bio=:bio,  user_fn=:user_fn, user_ln=:user_ln, email=:email, twitter_url=:twitter, insta_url=:insta, facebook_url=:facebook WHERE user_id=:user_id;");
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
        //$req->bindParam(':profile_pic', $profilepic);
        
        $req->execute();
        
        echo "<script type='text/javascript'>location.href = '?controller=dashboard&action=mem_details';</script>";
        /*upload profile image if it exists
        if (!empty($_FILES[self::InputKey]['profile_pic'])) {
		Blogger::uploadImage($profilepic);*/
	}

}
