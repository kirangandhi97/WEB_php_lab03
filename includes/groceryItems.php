<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize grocery items in the session if not already set
if (!isset($_SESSION['groceryItems'])) {
    $_SESSION['groceryItems'] = ["Milk", "Bread", "Eggs", "Butter", "Cheese"];
}

if (!isset($_SESSION['groceryDetails'])) {
    $_SESSION['groceryDetails'] = [
        "Milk" => ["type" => "Dairy", "price" => 1.5, "expiry_date" => "2025-02-15"],
        "Bread" => ["type" => "Bakery", "price" => 2.0, "expiry_date" => "2025-01-10"],
        "Eggs" => ["type" => "Poultry", "price" => 3.0, "expiry_date" => "2025-03-10"],
        "Butter" => ["type" => "Dairy", "price" => 4.0, "expiry_date" => "2025-04-05"],
        "Cheese" => ["type" => "Dairy", "price" => 5.5, "expiry_date" => "2025-03-20"]
    ];
}

// Assign session variables to local variables for convenience
$groceryItems = &$_SESSION['groceryItems'];
$groceryDetails = &$_SESSION['groceryDetails'];
?>
