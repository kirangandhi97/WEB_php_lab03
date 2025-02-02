<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="../handlers/add_product.php" method="post">
        <input type="text" name="name" placeholder="Product Name" required><br>
        <input type="number" name="price" placeholder="Price" step="0.01" required><br>
        <input type="number" name="quantity" placeholder="Quantity" required><br>
        <button type="submit">Add Product</button>
    </form>
    <a href="../index.php">Back to Home</a>
</body>
</html>
