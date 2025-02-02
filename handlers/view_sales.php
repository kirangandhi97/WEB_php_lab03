<?php
require_once "../includes/Sales.php";
require_once "../includes/database.php";
session_start();

if (!isset($_SESSION['sales'])) {
    echo "No sales data available!";
    exit;
}

$sales = $_SESSION['sales'];
echo "<h2>Total Sales: $" . number_format($sales->getTotalSales(), 2) . "</h2>";
?>
<a href="../index.php">Go Back</a>
