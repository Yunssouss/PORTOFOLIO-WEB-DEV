<?php
// نفس الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'inventory');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity_requested = $_POST['quantity'];

    // جلب بيانات المنتج من قاعدة البيانات
    $sql = "SELECT product_name, product_quantity FROM products WHERE id=$product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    if ($quantity_requested > $product['product_quantity']) {
        echo "<script>alert('الكمية المطلوبة أكبر من المخزون المتوفر!');</script>";
    } else {
        // نخصم الكمية من المخزون
        $new_quantity = $product['product_quantity'] - $quantity_requested;
        $update_sql = "UPDATE products SET product_quantity=$new_quantity WHERE id=$product_id";
        $conn->query($update_sql);

        echo "<script>alert('تم إضافة المنتج لسلة المشتريات بنجاح!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة المشتريات</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">إضافة منتج لسلة المشتريات</h1>
        <form action="cart.php" method="POST">
            <div class="form-group">
                <label for="product_id">رقم المنتج</label>
                <input type="number" class="form-control" id="product_id" name="product_id" required>
            </div>
            <div class="form-group">
                <label for="quantity">الكمية المطلوبة</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">إضافة لسلة المشتريات</button>
        </form>
        <hr>
        <a href="inventory.php" class="btn btn-success btn-block">رجوع إلى المخزون</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
