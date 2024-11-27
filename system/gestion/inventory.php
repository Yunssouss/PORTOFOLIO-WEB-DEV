<?php 
include 'config.php';


$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($products) > 0) {
    // كاينين منتجات
    foreach ($products as $row) {
        
        // مثال: 
        // echo $row['product_name'];
    }
} else {
    echo "لا يوجد منتجات";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المخزون</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">المخزون الحالي</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>الرقم</th>
                    <th>اسم المنتج</th>
                    <th>ثمن المنتج</th>
                    <th>الكمية</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['product_price'] ?></td>
                        <td><?= $product['product_quantity'] ?></td>
                        <td><a href="update_product.php?id=<?= $product['id'] ?>" class="btn btn-warning">تعديل</a></td>
                        <td><a href="delete_product.php?id=<?= $product['id'] ?>" class="btn btn-danger">حذف</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php  close() 

?>

