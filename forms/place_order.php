<form action="process_order.php" method="post">
    <input type="text" name="customer_name" placeholder="Enter your name" required><br>
    <label>Select Products:</label><br>
    <input type="checkbox" name="products[]" value="Apple"> Apple ($2) <br>
    <input type="checkbox" name="products[]" value="Banana"> Banana ($1) <br>
    <button type="submit">Place Order</button>
</form>