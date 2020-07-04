<?php

class CategoriesController {
    
    public function showAll(){
    // For show all
    
    $position = 0;
    $src = 'views/images/HP_images/tools.JPG';
    $url = "<img src=$src style='width:200px'>";
    $header = "Welcome to the Screw-It archives.";
    $styl = "background-color: #cacbcc; color: white; padding:10px; margin-left: 80px; margin-right: 80px;";
    $blog = Categories::getAll();

    $countBlogs = Categories::countBlogs();
    //print_r($countBlogs);

    
    //print_r($blog);
    
    // used later if mamange to make pages e.g. displaying 10 out of 25 results
                if ($countBlogs < 10) {
                    $maxCount = $countBlogsTest;
                }
                else {
                    $maxCount = 10;
                }
    //echo $countBlogsTest[0];
    
    $results = "$countBlogs[0] result found";
    
    // create objects for each row in the db
    
       $position = 0;
       for($i = 1; $i <= $countBlogs[0]; $i++) {
            ${"blog$i"} = new Categories;
            ${"blog$i"}->blog_id = $blog[$position]['blog_id'];
            ${"blog$i"}->title = $blog[$position]['title'];
            
                $len = 40;
                if (strlen($blog[$position]['title'])<$len) {
                    $titleShort = $blog[$position]['title'];
                    }
                else {
                    $pos=strpos($blog[$position]['title'], ' ', $len);
                    $titleShort = substr($blog[$position]['title'],0,$pos)."..."; 
                }
            ${"blog$i"}->titleShort = $titleShort;     
            ${"blog$i"}->body = $blog[$position]['body'];
            
                $len = 100;
                if (strlen($blog[$position]['body'])<$len) {
                    $bodyShort = $blog[$position]['body'];
                    }
                else {
                    $pos=strpos($blog[$position]['body'], ' ', $len);
                    $bodyShort = substr($blog[$position]['body'],0,$pos)."..."; 
                }
                
            ${"blog$i"}->bodyShort = $bodyShort;   
            
                $len = 500;
                if (strlen($blog[$position]['body'])<$len) {
                    $bodyLong = $blog[$position]['body'];
                    }
                else {
                    $pos=strpos($blog[$position]['body'], ' ', $len);
                    $bodyLong = substr($blog[$position]['body'],0,$pos)."..."; 
                }
                
            
            ${"blog$i"}->bodyShort = $bodyShort;
            ${"blog$i"}->bodyLong = $bodyLong;   
            ${"blog$i"}->main_image = $blog[$position]['third_image'];
            //${"blog$i"}->likes = $likes[$position];
            //${"blog$i"}->comments = $comments[$position];
            
            // HTML
            
            //${"blog$i"}->views = $blog[$position]['views'];
            ${"blog$i"}->date_posted = $blog[$position]['date_posted'];
            
            $position++;
            
        } 
    
  

 
        
    // HTML
    
    /*
    
        if ($countBlogsTest[0] = 0) {
            $results = "Sorry, $count results found. Please check back later!";
        } else if ($countBlogsTest[0] = 1) {
           $results = "$countBlogsTest[0] result found";
        } else {
            $results = "$countBlogsTest[0] results found";
        }
     * 
     * */
     
    
       

    
    require_once('views/pages/categories.php');
}






    // for specific search
    public function searchCategory(){
        
        $category = filter_input(INPUT_GET, "category",FILTER_SANITIZE_SPECIAL_CHARS);
        $countBlogsTest = Categories::countBlogsCat($category);
        $blog = Categories::getAllBlogs($category);
        //print_r($title[0]);
        
        
        //echo $countBlogsTest;
        $countBlogs = $countBlogsTest;
        $url = "<img src='views/images/HP_images/$category.png' style='width:300px'>";
        
        if ($countBlogs == 0) {
            $results = "There are currently no blogs to display right now<br>"
                    . "<a href='?controller=home&action=home;>Go Home?</a>";
        }
        else if ($countBlogs == 1) {
            $results = "Displaying $countBlogs out of $countBlogs result";
        }
        else {
            $results = "Displaying $countBlogs out of $countBlogs results";
        }

        
        
        // checks if get superglobal is one of the 3 valid categories (if not return error)
        $validCategories= ['create','decorate','renovate'];
        if (in_array($category,$validCategories)){
            
                if ($category === "create") {
                    $header = "If you're wanting to create something new, from tables to toothpaste and everything in between, you can find it here.";
                    $styl = "background-color: #FCA15F; color: white; padding:10px; margin-left: 80px; margin-right: 80px;";

                }
                else if ($category === "decorate") {
                    $header = "Want to give your home an uplift? No matter what your style or your budget, below you can find all kinds of inspiration to make your home your own.";
                    $styl = "background-color: #70D6FF; color: black; padding:10px; margin-left: 80px; margin-right: 80px;";
                }
                else {
                    $header = "If your home could use a little TLC, below you can find new ways to transform your home from shabby to shabby chic.";
                    $styl = "background-color: #3F7CAC; color: white; padding:10px; margin-left: 80px; margin-right: 80px;";
                }
                
                
                
        // ------------------------------------------------------------------------
                // create objects for each row in the db
       $position = 0;
       for($i = 1; $i <= $countBlogs; $i++) {
            ${"blog$i"} = new Categories;
            ${"blog$i"}->blog_id = $blog[$position]['blog_id'];
            ${"blog$i"}->title = $blog[$position]['title'];
            
                $len = 40;
                if (strlen($blog[$position]['title'])<$len) {
                    $titleShort = $blog[$position]['title'];
                    }
                else {
                    $pos=strpos($blog[$position]['title'], ' ', $len);
                    $titleShort = substr($blog[$position]['title'],0,$pos)."..."; 
                }
            ${"blog$i"}->titleShort = $titleShort;     
            ${"blog$i"}->body = $blog[$position]['body'];
            
                $len = 100;
                if (strlen($blog[$position]['body'])<$len) {
                    $bodyShort = $blog[$position]['body'];
                    }
                else {
                    $pos=strpos($blog[$position]['body'], ' ', $len);
                    $bodyShort = substr($blog[$position]['body'],0,$pos)."..."; 
                }
                
            ${"blog$i"}->bodyShort = $bodyShort;   
            
                $len = 500;
                if (strlen($blog[$position]['body'])<$len) {
                    $bodyLong = $blog[$position]['body'];
                    }
                else {
                    $pos=strpos($blog[$position]['body'], ' ', $len);
                    $bodyLong = substr($blog[$position]['body'],0,$pos)."..."; 
                }
                
            
            ${"blog$i"}->bodyShort = $bodyShort;
            ${"blog$i"}->bodyLong = $bodyLong;   
            ${"blog$i"}->main_image = $blog[$position]['third_image'];
            //${"blog$i"}->likes = $likes[$position];
            //${"blog$i"}->comments = $comments[$position];
            
            // HTML
            
            //${"blog$i"}->views = $blog[$position]['views'];
            ${"blog$i"}->date_posted = $blog[$position]['date_posted'];
            
            $position++;
            
        }
                
        

        require_once('views/pages/categories.php');    
            
        }
        
        // ERROR - IF NOT FOUND
        else {
            return call('pages', 'error');
        }
        
    }
}