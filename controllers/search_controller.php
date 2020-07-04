<?php

class SearchController {

    
   public function search() {
      // we expect a url of form ?controller=search&action=&searchterm
      // without an entry we just redirect to the error page as we need the entry to find it in the database
      if (!isset($_POST['submit-search']))
        return call('pages', 'error');
      
      //try{
      // we use the given entry to get the correct post
      $userentry = filter_input(INPUT_POST,'search', FILTER_SANITIZE_SPECIAL_CHARS);
      $results = Search::find($_POST['search']);
      require_once('views/pages/SearchResults.php');
      //}
 //catch (Exception $ex){
   //  $ex->getMessage();
    // return call('pages','error');
 }
    }
 