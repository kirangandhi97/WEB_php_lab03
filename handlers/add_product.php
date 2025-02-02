<?php
require_once "../includes/Inventory.php";
require_once "../includes/database.php";
session_start();

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = new Inventory();
}

$inventory = $_SESSION['inventory'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventory->addProduct($_POST["name"], $_POST["price"], $_POST["quantity"]);
    echo "Product added successfully!";
}
?>
<a href="../forms/add_product.html">Go Back</a>
