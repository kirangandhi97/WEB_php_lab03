<?php
include 'includes/groceryItems.php';
include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expiry Status</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h2>Expiry Status</h2>
            <?php include 'includes/menu.php'; ?>
        </div>
        <?php checkExpiry($groceryDetails); ?>
    </div>
</body>

</html>
