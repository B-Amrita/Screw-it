<?php

class Categories {
    
    public $title;
    public $category;
    public $date_posted;
    public $body;
    public $blog_id;
    public $main_image;
    public $likes;
    public $comments;

// Catagories

public function getAllTitles(){
    $sql = "select title from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $title[] = $row['title'];
    }

    return $title;
}

public function getAllBody(){
    $sql = "select body from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $body[] = $row['body'];
    }

    return $body;
}

// Counts
    public function countBlogs(){
        $sql = "select count(blog_id) from blog_posts";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetch();

        return $result;
    }    
    
     public function countBlogsCat($category){
        $db = Screw_it::getInstance();
        $req = $db->prepare('SELECT count(blog_id) as count from blog_posts
                             WHERE category = :category;'); 
        $req->execute(array('category' => $category));
        $result = $req->fetch();

        return $result[0];
    }   
    
    // Data
    
    public function getAllBlogs($category){
        $db = Screw_it::getInstance();
        $sql = "select * from blog_posts WHERE category = :category;";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('category' => $category));
        $result = $stmt->fetchAll();

        return $result;
    }
    
        public function getAll(){
        $db = Screw_it::getInstance();
        $sql = "select * from blog_posts;";
        $stmt = Screw_it::getInstance()->query($sql);
        $result = $stmt->fetchAll();

        return $result;
    }
       
    }


