<?php
$host = 'localhost';
$user = 'root';

$mysqli = new mysqli($host, $user);
if($mysqli->connect_errno){
    printf("connection failed: %s\n", $mysqli->connect_error);
    die();
}

if(!$mysqli->query('CREATE DATABASE accounts')) {
    printf("Errormessage: %s\n", $mysqli->error);
}

$mysqli->query('
CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
  	`first_name` varchar(50) NOT NULL,
	`last_name` varchar(50) NOT NULL,
 	`email` varchar(100) NOT NULL,
  	`phone` int(11) NOT NULL DEFAULT 0,
 	`password` varchar(100) NOT NULL,
 	`level` set('manager','ordinary') NOT NULL,
 	`hash` varchar(32) NOT NULL,
PRIMARY KEY (`id`)
); ') or die($mysqli->error);

?>