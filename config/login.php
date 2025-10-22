<?php
require_once 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = trim(strtolower($_POST['username']));
    // $email = trim(strtolower($_POST['email']));
    $password = trim($_POST['password']);

    if(empty($username) || empty($password)){
        die("Your email and password are required");
    }
    try{
        // Retrieve user data including password hash
        $stmt = $conn->prepare("SELECT id, username, password FROM users where username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            die("INVALID EMAIL OR PASSWORD");
        }
        // Verify password 
        if(!password_verify($password, $user['password'])){
            die("Invalid email or password");
        }

        // Login successful -> set session and redirect
        $_SESSION['user_id'] =$user['id'];
        header("Location:../index.php?login=success");
        exit();
    }catch(PDOException $e){
        die("Error: ". $e->getMessage());
    }
}