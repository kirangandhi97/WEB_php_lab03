<?php
include 'includes/groceryItems.php';
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Grocery Item</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h2>Add New Grocery Item</h2>
            <?php include 'includes/menu.php'; ?>
        </div>
        <form method="post" action="index.php">
            <label>Item Name: </label><input type="text" name="name" required><br>
            <label>Item Type: </label><input type="text" name="type" required><br>
            <label>Item Price: </label><input type="number" step="0.01" name="price" required><br>
            <label>Expiry Date: </label><input type="date" name="expiry_date" required><br>
            <button type="submit" name="addItem">Add Item</button>
        </form>
    </div>
</body>

</html>
