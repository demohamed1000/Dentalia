<?php

require_once 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = trim($_POST['username']);
    $email = trim(strtolower($_POST['email']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
        die("Please fill all fields");
    }
    if($password !== $confirm_password){
        die("Password and confirm password should be matched");
    }
    if(strlen($password)< 8){
        die("Password must not be less than 8 characters");
    }
    // Check if the password contains at least one letter
    if (!preg_match("/[A-Za-z]/", $password)) {
        die("Password must contain at least one letter");
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    try{
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            die("Email already exists");
        }
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES(?,?,?)");
        $stmt->execute([$name, $email, $hashed_password]);

        //Redirect to Main Page
        header("Location:../index.php?signup=success");
        exit();
    }catch (PDOException $e){
        die("Error: " . $e->getMessage());
    }
}