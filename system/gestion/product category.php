<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $category = $_POST['product_category'];
    
    // الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'inventory_system');
    
    // التأكد من عدم وجود خطأ
    if ($conn->connect_error) {
        die('فشل الاتصال: ' . $conn->connect_error);
    }
    
    // إدخال البيانات مع التصنيف
    $sql = "INSERT INTO products (name, price, category) VALUES ('$name', '$price', '$category')";
    if ($conn->query($sql) === TRUE) {
        echo 'تمت إضافة المنتج بنجاح!';
    } else {
        echo 'خطأ: ' . $conn->error;
    }
    
    $conn->close();
}
?>
