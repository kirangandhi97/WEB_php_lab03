<?php
class Sales {
    public $totalSales = 0;

    public function recordSale($amount) {
        $this->totalSales += $amount;
    }

    public function getTotalSales() {
        return $this->totalSales;
    }
}
?>