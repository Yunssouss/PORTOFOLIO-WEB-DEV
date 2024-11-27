<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock_management";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// تحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// إضافة المنتج لقاعدة البيانات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO products (name, price, quantity) VALUES ('$name', '$price', '$quantity')";
    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة المنتج بنجاح!";
    } else {
        echo "خطأ: " . $conn->error;
    }
}

// إغلاق الاتصال
$conn->close();
?>
