<?php

class HomeController {
    
    

   public function home() {
       
   
       //Counts all rows in DB
       $count = BlogHP::countBlogs();
       $count = $count[0];
       $position = 0;

       
       //gets arrays from home_model
       $title = BlogHP::getAllTitles();
       $body = BlogHP::getAllBody();
       $main_image = BlogHP::getAllImage();
       $blog_id = BlogHP::getAllBlogID();
       //$comments = BlogHP::getAllComments();
       //$likes = BlogHP::getAllLikes();
       //$date_posted = BlogHP::getAllDatePosted();
       
       //OOP
       
       // create objects for each row in the db
       for($i = 1; $i <= $count; $i++) {
            ${"blog$i"} = new BlogHP;
            ${"blog$i"}->blog_id = $blog_id[$position];
            ${"blog$i"}->title = strtolower($title[$position]);
            
                $len = 40;
                if (strlen($title[$position])<$len) {
                    $titleShort = $title[$position];
                    }
                else {
                    $pos=strpos($title[$position], ' ', $len);
                    $titleShort = substr($title[$position],0,$pos)."..."; 
                }
                
            ${"blog$i"}->titleShort = strtolower($titleShort); 
                
            ${"blog$i"}->body = $body[$position];
            
                $len = 100;
                if (strlen($body[$position])<$len) {
                    $bodyShort = $body[$position];
                    }
                else {
                    $pos=strpos($body[$position], ' ', $len);
                    $bodyShort = substr($body[$position],0,$pos)."..."; 
                }
                
            ${"blog$i"}->bodyShort = $bodyShort;   
            
                $len = 250;
                if (strlen($body[$position])<$len) {
                    $bodyLong = $body[$position];
                    }
                else {
                    $pos=strpos($body[$position], ' ', $len);
                    $bodyLong = substr($body[$position],0,$pos)."..."; 
                }
                
            
            ${"blog$i"}->bodyShort = $bodyShort;
            ${"blog$i"}->bodyLong = $bodyLong;   
            ${"blog$i"}->main_image = "'".$main_image[$position]."'";
            
            $likes = BlogHP::getLikes($blog_id[$position]);
            ${"blog$i"}->likes = $likes[0]['likes'];
            
            $comments = BlogHP::getComments($blog_id[$position]);
            ${"blog$i"}->comments = $comments[0]['likes'];
            //${"blog$i"}->likes = $likes[$position];
            //${"blog$i"}->comments = $comments[$position];
            
            // HTML
            
            ${"blog$i"}->viewHTML = "Read more...";
            
            $position++;
            
        }
        
        // if no of blog posts is less than 12 (tile display) creates blank
        // objects with default values
        
        if ($i < 13) {
            for($i = $i++; $i <= 13; $i++) {
                    ${"blog$i"} = new BlogHP;
                    ${"blog$i"}->blog_id = 999;
                    ${"blog$i"}->title = "Coming Soon";
                    ${"blog$i"}->body = "";
                    ${"blog$i"}->bodyShort = "";
                    ${"blog$i"}->bodyLong = "";   
                    ${"blog$i"}->main_image = "'views/images/HP_images/comingsoon.JPG'";
                    //${"blog$i"}->likes = "";
                    //${"blog$i"}->comments = "";
                    ${"blog$i"}->viewHTML = "";
                }
        } 
       
       
       
   
             
       
       
       
       // Procedural
           
       $blog1text = BlogHP::getLatestBlogText();
       $blog1title = BlogHP::getLatestBlogTitle();
       $blogimage = BlogHP::getLatestBlogImage();
       $blogid = BlogHP::getBlogId();
       $url = "'".BlogHP::getLatestBlogImage()."'";
       
       $titles = BlogHP::getAllTitles();
       $blogtitle1 = $title[0];
       $blogtitle2 = $title[1];
    

       // Categories
       $category[] = "create";
       $category[] = "decorate";
       $category[] = "renovate";
    
       require_once('views/pages/home.php');
       
   } 

 /*   
include "../../models/Homepage.php";

    $blog1 = new BlogHP; //Create Object from Model Class
    $blog1text = $blog1->getLatestBlogText();
    $blog1title = $blog1->getLatestBlogTitle();
    $url = "'".$blog1->getLatestBlogImage()."'";*/
 }
