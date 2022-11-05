<?php 
// Development connection

    $host = 'localhost';
    $db = 'dbms_project';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    // Remote connection
    // $host = 'sql3.freesqldatabase.com';
    // $db = 'sql3486120';
    // $user = 'sql3486120';
    // $pass = 'MxcYGILMWy';
    // $charset = 'utf8mb4';
    
    
    
    $dsn = "mysql:host=$host;port=3308;dbname=$db;charset=$charset";

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($conn);
    // $userObj = new user($pdo);
    // $userObj->insertUser("admin","password");
?>