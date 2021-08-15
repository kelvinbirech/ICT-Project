<?php

    require_once './core/database.php';
    //users table

    echo "Creating users table\n";
    $sql = "CREATE TABLE IF NOT EXISTS `user` (
        `id` SERIAL,
        `first_name` tinytext NOT NULL,
        `last_name` tinytext NOT NULL,
        `email` VARCHAR(150) NOT NULL UNIQUE,
        `password` tinytext NOT NULL,
        `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    $STH = $DBH->prepare($sql);
    $STH->execute();
    echo "Created users table\n";

    //albums table
    echo "Creating profile table\n";

    $STH = $DBH->prepare("CREATE TABLE IF NOT EXISTS `profiles` (
        `id` SERIAL,
        
        `displayname` tinytext NOT NULL,
        `expertise` tinytext NOT NULL,
        `about` tinytext NOT NULL,
        `website` tinytext,
        `email` tinytext NOT NULL,
        `telephone` tinytext NOT NULL,
        `user` bigint(20) UNSIGNED NOT NULL,
        `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        FOREIGN KEY(user) REFERENCES user(id) ON DELETE RESTRICT ON UPDATE CASCADE
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    $STH->execute();
    echo "Created profile table\n";


    echo "finished apllying all migrations."

 ?>