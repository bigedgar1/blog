<?php
    require_once(__DIR__ ."/databse.php");
    session_start();
    session_start();
    
    $path = "/baezm-blog/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
 
    if(!isset($_SESSION["connection"]))  {
        $connection = new Database($host, $username, $passwords, $database);
        $_SESSION["connection"] = $connection;
    }
