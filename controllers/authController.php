<?php
require '../config/db.php';

// User registration logic
if(isset($_POST['register'])){
    $name             = trim($_POST['name']);
    $email            = trim($_POST['email']);
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Comfirm password check
    if($password !== $confirm_password){
        die("❌ Passwords do not match. <a href = '../views/pages/register.php'>Go back</a>");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // INSERT into DB 
    $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if($stmt->execute()){
        header("Location: ../views/pages/login.php?success=registered");
        exit();
    }else {
        echo "❌ Error: ". $stmt->error;
    }
}

// user login logic
if(isset($_POST['login'])){
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: ../views/pages/dashboard.php");
            exit();
        }else {
            echo "Invalid password!";

        }
    }else {
        echo "User not found!";
    }
}

?>