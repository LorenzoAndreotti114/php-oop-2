<?php 

    class Category
    {
        private string $name;
        private string $icon;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function getIcon() {
            return $this->icon;
        }

        public function setIcon(string $icon) {
            $this->icon = $icon;
        }
    }

?>