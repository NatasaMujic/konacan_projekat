<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'event';
try {
    $con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

function createNewEvent($event_name, $image, $desc, $address, $city, $state, $date, $allow_comment, $user_id, $con): void
{
    $sql = "INSERT INTO new_event (`event_name`,`image`,`description`,`address`,`city`,`state`,`date`,`allow_comments`,`blocked`,`user_id`) VALUES (:ev_name,:image,:desc,:address,:city,:state,:date,:allow_comment,`0`,:user_id);";
    $query = $con->prepare($sql);
    $query->bindParam(':event_name', $event_name, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':desc', $desc, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':state', $state, PDO::PARAM_STR);
    $query->bindParam(':date', $date, PDO::PARAM_STR);
    $query->bindParam(':allow_comment', $allow_comment, PDO::PARAM_BOOL);
    $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $query->execute();
}