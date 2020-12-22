<?php
  
    $host = 'remotemysql.com';
    $db = '3yjhiLOObS';
    $user = '3yjhiLOObS';
    $pass = 'Ppi0aTJ6AQ';
    $charset = 'utf8mb4';


    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->InsertUser("admin","password");
    
?>