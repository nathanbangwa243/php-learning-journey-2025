<?php

// Connection to the database
include_once (__DIR__ . '/mysql.php');

try{

    $mysqlClient = new PDO(
        $mysqlURI,
        $userName,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

}
catch (Exception $error){
    die('Error : ' . $error->getMessage());
}

?>