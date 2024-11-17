<?php
include 'chekout.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $userId = $_SESSION['user_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $stmt = $pdo->prepare('INSERT INTO reviews (product_id, user_id, rating, comment) VALUES (?, ?, ?, ?)');
    $stmt->execute([$productId, $userId, $rating, $comment]);

    header('Location: product.html?id=' . $productId);
    exit;
}
?>
