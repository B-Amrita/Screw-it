<?php


/****PRE POPULATE EXISTING USER DETAILS****/
$stmt = $pdo->prepare('SELECT * FROM Users WHERE user_ID = ?');
    $stmt->execute([$_GET['user_ID']]);
    
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

class update {
    //send update to DB?
}
