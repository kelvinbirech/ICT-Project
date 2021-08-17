<?php
$host = 'localhost';
$dbname = 'linkme';
$user = 'root';
$pass = '';
try{
$db = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}


catch(PDOException $e){
    echo "I'm sorry. I'm afraid I can't do that.";
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}