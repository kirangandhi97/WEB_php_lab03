<?php
require_once "../includes/Inventory.php";
require_once "../includes/database.php";
session_start();

if (!isset($_SESSION['inventory'])) {
    echo "No inventory found!";
    exit;
}

$inventory = $_SESSION['inventory'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['product'];
    $quantity = intval($_POST['quantity']);

    $inventory->updateQuantity($name, $quantity);
    echo "Quantity updated successfully!";
}
?>
<a href="../forms/update_quantity.html">Go Back</a>
