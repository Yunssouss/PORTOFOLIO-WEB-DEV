<?php


include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];
    $category = $_POST['product_category']; // استقبال النوعية

    // إدخال البيانات فـ قاعدة البيانات
    $sql = "INSERT INTO products (product_name, product_price, product_quantity, category)
            VALUES ('$name', '$price', '$quantity', '$category')";
    
    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة المنتج بنجاح";
    } else {
   
    }
}






if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $category = $_POST['product_category'];
    $sql = "INSERT INTO products (name, price, quantity, category) VALUES ('$name', '$price', '$quantity', '$category')";
    

    $category = $_POST['product_category']; // استقبال التصنيف من الفورم


    



    header("Location: inventory.php");
    exit();
}





?>
