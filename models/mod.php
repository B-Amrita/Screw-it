<?php

class Mod {
    
    public function getAllTitles(){
    $sql = "select title from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $title[] = $row['title'];
    }

    return $title;
}

    public function getAllUsers(){
        $db = Screw_it::getInstance();      
        $req = $db->prepare("SELECT * FROM users where user_type = 'member' and locked = 'N' order by username;");
        
                if (!$req) {
                    echo "error, pls handle";
                }

        $req->execute();
        $mem_details = $req->fetchAll();
        $details = $mem_details;

        return $details;
  
    }
    
        public function getAllUsersLocked(){
        $db = Screw_it::getInstance();      
        $req = $db->prepare("SELECT * FROM users where user_type = 'member' and locked = 'Y' order by username;");
        
                if (!$req) {
                    echo "error, pls handle";
                }

        $req->execute();
        $mem_details = $req->fetchAll();
        $details = $mem_details;

        return $details;
  
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

    public function getComments10() {
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
                ORDER BY comments.comment_date desc
                LIMIT 10";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $comms = $stmt->fetchAll();

        return $comms;
    }
    
    public function commentsCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments where parent_comment_id = 0;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $commsCount = $stmt->fetchAll();

        return $commsCount;
    }
    
        public function commentsCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments
                where parent_comment_id = 0 
                    and comment_date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $commsCount = $stmt->fetchAll();

        return $commsCount;
    }
    
    public function blogsCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(blog_id) AS count from blog_posts;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $blogCount = $stmt->fetchAll();

        return $blogCount;
    }
    
    public function blogsCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(blog_id) AS count from blog_posts
                where date_posted >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $blogCount = $stmt->fetchAll();

        return $blogCount;
    }
    
    public function memberCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(user_id) AS count from users where user_type = 'Member';";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    public function memberCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(user_id) AS count from users 
                where user_type = 'Member'
                AND date_joined >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    public function bloggerCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(user_id) AS count from users where user_type = 'Blogger';";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    public function bloggerCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(user_id) AS count from users
                where user_type = 'Blogger'
                AND date_joined >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
        public function likesCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(fav_id) AS count from favourites;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    public function likesCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(fav_id) AS count from favourites
                where fave_date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
        public function repliesCount(){
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments where parent_comment_id > 0;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    public function repliesCountLW(){
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) AS count from comments where parent_comment_id > 0
                and comment_date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY;";
        
        $stmt = $db->prepare($sql);
        $stmt->execute(array());
        $memCount = $stmt->fetchAll();

        return $memCount;
    }
    
    // Delete
    
    public function deleteComment($commentID){
        $db = Screw_it::getInstance();
        $sql = "delete from comments where comment_id = :commentid;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('commentid' => $commentID));
    }
    
    public function lockUser($user_id){
        $db = Screw_it::getInstance();
        $sql = "UPDATE users SET Locked = 'Y' WHERE user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
    }
    
    public function unlockUser($user_id){
        $db = Screw_it::getInstance();
        $sql = "UPDATE users SET Locked = 'N' WHERE user_id = :user_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('user_id' => $user_id));
    }
    
}