<?php
class Order {
    public $customerName;
    public $productsOrdered = [];
    public $totalPrice = 0;

    public function __construct($customerName, $products) {
        $this->customerName = $customerName;
        $this->productsOrdered = $products;
        foreach ($products as $product) {
            $this->totalPrice += $product['price'] * $product['quantity'];
        }
    }

    public function processOrder($inventory) {
        foreach ($this->productsOrdered as $orderedProduct) {
            $inventory->updateQuantity($orderedProduct['name'], -$orderedProduct['quantity']);
        }
    }

    public function getOrderSummary() {
        return [
            'customer' => $this->customerName,
            'products' => $this->productsOrdered,
            'total' => $this->totalPrice
        ];
    }
}
?>