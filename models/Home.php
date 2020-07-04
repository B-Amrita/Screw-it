<?php

//include "../../connection.php";

class BlogHP {

    public $blog_id;
    public $title;
    public $bodyShort;
    public $bodyLong;
    public $body;
    public $main_image;
    public $likes;
    public $comments;
    public $titleShort;
    public $third_image;
    
    public $viewHTML;

    public function getTitle() {
        $sql = "SELECT * FROM blog_posts where published = 'published';";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['title'] . "<br>";
        }
    }

    //method? only need prepared statments if we get user input
    public function getLatestBlogTitle() {
        $sql = "select * from blog_posts where published = 'published' order by date_posted desc;";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch()) {
            return $row['title'] . "<br>";
        }
    }

    public function getLatestBlogImage() {
        $sql = "select * from blog_posts where published = 'published' order by date_posted desc;";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch()) {
            //$rows[] = $row;
            return $row['main_image'];
        }
    }

    public function getLatestBlogText() {
        $sql = "select * from blog_posts where published = 'published' order by date_posted desc;";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['body'];
        }
    }
  public function getBlogId() { //new mothod to get blog_id 
        $sql = "select * from blog_posts where published = 'published' order by date_posted desc;";
        $stmt = Screw_it::getInstance()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['blog_id'];
        }
    }

    // New code ----- 
    public function getAllTitles(){
        $sql = "select title from blog_posts where published = 'published' order by date_posted desc";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        foreach( $result as $row ) {
        $title[] = $row['title'];
        }

        return $title;
    }
    
    public function getAllBody(){
        $sql = "select body from blog_posts where published = 'published'order by date_posted desc";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        foreach( $result as $row ) {
        $title[] = $row['body'];
        }

        return $title;
    }
    
    public function getAllImage(){
        $sql = "select third_image from blog_posts where published = 'published' order by date_posted desc";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        foreach( $result as $row ) {
        $main_image[] = $row['third_image'];
        }

        return $main_image;
    }
    

    
    public function getAllBlogID(){
        $sql = "select blog_id from blog_posts where published = 'published' order by date_posted desc";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        foreach( $result as $row ) {
        $blog_id[] = $row['blog_id'];
        }

        return $blog_id;
    }
    
    public function getAllDatePosted(){
        $sql = "select date_posted from blog_posts where published = 'published' order by date_posted desc";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        foreach( $result as $row ) {
        $date_posted[] = $row['date_posted'];
        }

        return $date_posted;
    }
    
    
    
    // counts
    
        public function countBlogs(){
        $sql = "select count(blog_id) from blog_posts where published = 'published'";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetch();

        return $result;
    }
    
    
    
    // WIP -----------------------------------------------------------------------
    
     public function getLikes($blog_id) {
        $db = Screw_it::getInstance();
        $sql = "select count(fav_id) as likes
                    from favourites
                WHERE blog_id = :blog_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('blog_id' => $blog_id));
        $favourites = $stmt->fetchAll();

        return $favourites; 
     }
     
          public function getComments($blog_id) {
        $db = Screw_it::getInstance();
        $sql = "select count(comment_id) as likes
                    from comments
                WHERE blog_id = :blog_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('blog_id' => $blog_id));
        $favourites = $stmt->fetchAll();

        return $favourites; 
     }

}