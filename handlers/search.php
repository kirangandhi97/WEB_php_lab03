<?php
require_once "../includes/Inventory.php";
require_once "../includes/database.php";
session_start();

if (!isset($_SESSION['inventory'])) {
    echo "No inventory data found!";
    exit;
}

$inventory = $_SESSION['inventory'];
$searchResults = $inventory->searchProduct($_POST["search_term"]);

foreach ($searchResults as $name => $details) {
    echo "Product: $name, Price: $" . $details['price'] . ", Quantity: " . $details['quantity'] . "<br>";
}
?>
<a href="../forms/search_product.html">Go Back</a>
