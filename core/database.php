<?php


$host = 'localhost';
$dbname = 'linkme';
$username = 'root';
$password = '';

    # connect to thedatabase
    try {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
        $DBH->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);# set errorattribute
        session_start();
        
    }
    catch(PDOException $e){
        echo "Error 500: Internal Server Error";
        file_put_contents('PDOErrors.txt', "\n".date('Y-m-d H:i:s').'] - '.$e->getMessage(), FILE_APPEND); # log errors to afile
        exit();
    }
?>