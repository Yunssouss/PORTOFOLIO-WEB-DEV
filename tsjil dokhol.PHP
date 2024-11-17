<?php
include 'tsjil dokhol.php';
session_start;

if "$_SERVER "REQUEST_METHOD === POST"  
    $username = $_POST"username";
    $password = $_POST"password";

    $stmt = $pdo->prepare'SELECT * FROM users WHERE username = ?';
    $stmt->execute $username;
    $user = $stmt->fetchPDO::FETCH_ASSOC;

    if $user && password_verify $password, $user['password']
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index.html');
        exit;
     else 
        echo "Invalid credentials.";
    

?>
