<?php
session_start();

// تحقق من السلة
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    die("Your cart is empty.");
}

// الاتصال بقاعدة البيانات
$host = 'localhost';
$port = '3306';
$dbname = 'online_store';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;3306=$port;onlinestore=$dbname", $username="root", $password="");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // معالجة الدفع (مثال مبسط)
    foreach ($_SESSION['cart'] as $product => $quantity) {
        // إدخال البيانات في قاعدة البيانات (مثلاً جدول الطلبات)
        $stmt = $pdo->prepare("INSERT INTO orders (product, quantity) VALUES (:product, :quantity)");
        $stmt->execute(['product' => $product, 'quantity' => $quantity]);
    }
    
    // إفراغ السلة
    $_SESSION['cart'] = [];
    echo "Payment processed and cart is empty now!";
    
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
