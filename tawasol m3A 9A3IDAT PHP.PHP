<?php
$host = 'localhost';
$port = '3306'
$dbname = 'online_store';
$username = 'root';
$password = '';



try {$port = '3306'
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
