<?php

    require_once '/xampp/htdocs/Linkme/search/database.php';
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
    $STH = $db->prepare($sql);
    $STH->execute();
    echo "Created users table\n";

    //albums table
    echo "Creating profile table\n";

$STH = $db->prepare("CREATE TABLE IF NOT EXISTS `profiles` (
    `id` SERIAL,

    `displayname` tinytext NOT NULL,
    `expertise` tinytext NOT NULL,
    `about` tinytext NOT NULL,
    `image` tinytext,
    `website` tinytext,
    `email` tinytext NOT NULL,
    `telephone` tinytext NOT NULL,
    `user` bigint(20) UNSIGNED NOT NULL,
    `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    FOREIGN KEY(user) REFERENCES user(id) ON DELETE RESTRICT ON UPDATE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
$STH->execute();
echo "Created profile table\n";

// $STH = $db->prepare("ALTER TABLE profiles ADD salary INT");
// $STH->execute();
$STH = $db->prepare("ALTER TABLE profiles ADD experience INT(100)");
$STH->execute();

echo "finished applying all migrations."

 ?>