<?php 

    require_once __DIR__ . "/category.php";
    class products
    {

        private string $name;
        private float $price;
        private string $image;
        public Category $category;

        public function __construct(string $name, float $price) {

            if ($name === "") {
                throw new Exception("il nome non può essere vuoto");
            }

            $this->name = $name;


            if ($price < 0) {
                throw new Exception("il prezzo non può essere negativo");
            }

            $this->price = $price;

        }
        
        public function getName(string $name) {
            return $this->name;
        }

        public function getPrice(float $price) {
            return $this->price;
        }

        public function getImage(string $image) {
            return $this->image;
        }

        public function setImage(string $image) : void {
            if ($image === "") {
                throw new Exception("l'immagine non può essere vuota");
            }

            $this->image = $image;
        }

    }



?>