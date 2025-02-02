<?php
require_once "../includes/Order.php";
require_once "../includes/Inventory.php";
require_once "../includes/Sales.php";
require_once "../includes/database.php";
session_start();

if (!isset($_SESSION['inventory']) || !isset($_SESSION['sales'])) {
    $_SESSION['inventory'] = new Inventory();
    $_SESSION['sales'] = new Sales();
}

$inventory = $_SESSION['inventory'];
$sales = $_SESSION['sales'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST["customer_name"];
    $orderedProducts = $_POST["products"] ?? [];

    $order = new Order($customerName, $orderedProducts, $inventory);
    $sales->recordSale($order->getOrderSummary()['total']);

    echo "Order placed successfully! Total: $" . number_format($order->getOrderSummary()['total'], 2);
}
?>
<a href="../forms/place_order.html">Go Back</a>
