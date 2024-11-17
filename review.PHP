<?php
include 'db.php';

$productId = $_GET['product_id'];

$stmt = $pdo->prepare("SELECT * FROM reviews WHERE product_id = ?");
$stmt->execute([$productId]);
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($reviews);
?>
