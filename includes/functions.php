<?php
/**
 * Displays the inventory of grocery items in a table format.
 *
 * @param array $items The list of items (by name)
 * @param array $details The list of item details (by name)
 */
function displayInventory($items, $details)
{
    echo "<table border='1'>";
    echo "<tr>
            <th>Item</th>
            <th>Type</th>
            <th>Price</th>
            <th>Expiry Date</th>
        </tr>";
    foreach ($items as $item) {
        echo "<tr>
                <td>$item</td>
                <td>{$details[$item]['type']}</td>
                <td>\${$details[$item]['price']}</td>
                <td>{$details[$item]['expiry_date']}</td>
            </tr>";
    }
    echo "</table>";
}

/**
 * Add a new item to the inventory.
 *
 * @param array $items The list of items (by name)
 * @param array $details The list of item details (by name)
 * @param string $name The name of the new item
 * @param string $type The type of the new item
 * @param float $price The price of the new item
 * @param string $expiry_date The expiry date of the new item
 */
function addItem(&$items, &$details, $name, $type, $price, $expiry_date)
{
    $items[] = $name;
    $details[$name] = ["type" => $type, "price" => $price, "expiry_date" => $expiry_date];
}

/**
 * Displays the expiry status of each item in the inventory in a table format.
 *
 * @param array $details The list of item details (by name)
 */
function checkExpiry($details)
{
    /** Get the current date */
    $currentDate = date('Y-m-d');

    echo "<table border='1'>";
    echo "<tr>
            <th>Item</th>
            <th>Status</th>
        </tr>";
    foreach ($details as $item => $info) {
        /** Check if the item is expired */
        $status = ($info['expiry_date'] < $currentDate) ? "<span style='color: red;'>Expired</span>" : "<span style='color: green;'>Fresh</span>";
        
        echo "<tr>
                <td>$item</td>
                <td>$status</td>
            </tr>";
    }
    echo "</table>";
}
?>
