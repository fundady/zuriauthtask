<?php


$username = 'root';
$dsn = 'mysql:host=localhost; dbname=zurilogin';
$password = 'dM*tUpLF';


try {
    $db = new PDO($dsn,$username,$password); //establish connection to db
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //more details on exceptions

} catch (PDOException $ex) {
    echo "Connection failed ".$ex->getMessage();
}