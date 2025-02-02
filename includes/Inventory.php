<?php
class Inventory {
    public $products = [];

    public function addProduct($name, $price, $quantity) {
        $this->products[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
    }

    public function updateQuantity($name, $quantity) {
        foreach ($this->products as &$product) {
            if ($product['name'] === $name) {
                $product['quantity'] += $quantity;
                return true;
            }
        }
        return false;
    }

    public function displayInventory() {
        return $this->products;
    }
}
?>