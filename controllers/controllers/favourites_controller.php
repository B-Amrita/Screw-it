<?php

class favouritesController{
    
    public function checkfav() {
        
        favourties::checkfav($_POST['blog_id']);
    }
    
}

