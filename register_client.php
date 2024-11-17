<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    
   
    
    $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address']; // تأكد من أنك كتستقبل العنوان


    // الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'stock_management');
    
    // التأكد من عدم وجود خطأ
    if ($conn->connect_error) {
        die('فشل الاتصال: ' . $conn->connect_error);
    }
    
    $sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

    // إدخال البيانات
    $sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo 'تم تسجيل الحساب بنجاح!';
    } else {
        echo 'خطأ: ' . $conn->error;
    }
    
    $conn->close();
}
?>
