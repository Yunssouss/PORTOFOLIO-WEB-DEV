<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'inventory_system');

// التأكد من وجود الاتصال
if ($conn->connect_error) {
    die('فشل الاتصال: ' . $conn->connect_error);
}

// استخراج الفاتورة للمستخدم
$client_id = 1; // معرّف المستخدم الحالي
$sql = "SELECT product_name, quantity, price FROM invoices WHERE client_id = $client_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h2>فاتورتك</h2>';
    while ($row = $result->fetch_assoc()) {
        echo '<p>المنتج: ' . $row['product_name'] . ' | الكمية: ' . $row['quantity'] . ' | الثمن: ' . $row['price'] . ' درهم</p>';
    }
} else {
    echo 'ماكيناش فاتورات';
}

$conn->close();
?>
