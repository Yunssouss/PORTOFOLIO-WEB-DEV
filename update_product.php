<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    // تحديث البيانات فقاعدة البيانات
    $sql = "UPDATE products SET product_name='$product_name', product_price='$product_price', product_quantity='$product_quantity' WHERE id='$product_id'";

    if ($conn->query($sql) === TRUE) {
        echo "تم تحديث المنتج بنجاح";
    } else {
        echo "خطأ فالتحديث: " . $conn->error;
    }
}

$conn->close();
?>
