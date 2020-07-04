<?php

Class Search {
   
  
    public function find($search) {
      $db = Screw_it::getInstance();
      
      $query = "SELECT * FROM blog_posts WHERE title LIKE ? OR Category LIKE ? OR body LIKE ? or body2 LIKE ?";
      $stmt = $db->prepare($query);
      
      $userentry = filter_input(INPUT_POST,'search', FILTER_SANITIZE_SPECIAL_CHARS);
      $searchterm = "%" . $userentry. "%";
      $stmt->bindParam(1,$searchterm,PDO::PARAM_STR);
      $stmt->bindParam(2,$searchterm,PDO::PARAM_STR);
      $stmt->bindParam(3,$searchterm,PDO::PARAM_STR);
      $stmt->bindParam(4,$searchterm,PDO::PARAM_STR);
      $results = $stmt->execute();
     
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data;
   
    }
}
