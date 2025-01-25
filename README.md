# Project Logic

1. Grocery Items Array:

   - groceryItems.php contains an array $groceryItems, which holds the names of grocery items available in the store.
     A $groceryDetails associative array maps each item to its details (type, price, and expiry date).

2. Display Inventory:

   - functions.php contains a function displayInventory() which iterates through the list of items and displays them in a tabular format.
   - The function addItem() allows for adding new items to the $groceryItems array and the $groceryDetails array by passing the name, type, price, and expiry date as parameters.

3. Expiry Status:

   - The checkExpiry() function in functions.php compares each item's expiry date with the current date. It labels items as "Expired" or "Fresh" based on their expiry status, with different color styling for each status.

4. Adding Items:

   - The addItem.php page allows users to add new grocery items by filling in a form with the item's name, type, price, and expiry date.
   - Once submitted, the new item gets added to the groceryItems array and the groceryDetails array.

5. CSS Styling:
   - The styles.css file provides a clean design for the pages, making them user-friendly. It includes styles for tables, form inputs, and expiry status indicators.

# Assumptions

    - The expiry dates are stored in the format YYYY-MM-DD and compared directly as strings.
    - Basic validation is assumed for adding items (e.g., correct data format is entered).

# Challenges Faced

1. Expiry Date Comparison:

   - Initially, I faced challenges with comparing expiry dates correctly because PHP's date functions needed to be used to handle the comparison more reliably. The system now compares the expiry date with the current date in a consistent format (YYYY-MM-DD).

2. Form Handling and Dynamic Updates:
   - Adding items dynamically and ensuring the page updates without refreshing was a bit tricky in this simple PHP setup. A more complex implementation could use JavaScript for AJAX to update the inventory without a full page reload, but I kept it basic for simplicity.
