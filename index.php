<?php
include 'includes/groceryItems.php';
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h2>Grocery Inventory</h2>
            <?php include 'includes/menu.php'; ?>
        </div>
        <?php
        /** Check if "Add Item" button is clicked */
        if (isset($_POST['addItem'])) {
            /** Add new item */
            addItem($groceryItems, $groceryDetails, $_POST['name'], $_POST['type'], $_POST['price'], $_POST['expiry_date']);
        }
        displayInventory($groceryItems, $groceryDetails);
        ?>
    </div>
</body>

</html>
