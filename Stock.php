<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'inventory_system');

// استخراج جميع المنتجات
$sql = "SELECT product_name, quantity FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['quantity'] <= 3) {
            echo '<p style="color:red;">المنتج: ' . $row['product_name'] . ' قرب يسالي، خاصك تعاود تشريه!</p>';
        }
    }
}

$conn->close();
?>
