<?php 

    require_once __DIR__ . "/products.php";
    class Food extends products
    {
        private string $taste;
        private int $weightGr;


        public function __construct(string $name, float $price, int $weightGr, string $taste) {

            parent::__construct($name, $price);

            $this->weightGr = $weightGr;
            $this->taste = $taste;

        }

        public function getWeightGr(int $weightGr) {
            return $this->weightGr;
        }

        public function setWeightGr(int $weightGr) {
            $this->weightGr = $weightGr;
        }

        public function setTaste(string $taste) {
            $this->taste = $taste;
        }
        
    }

?>