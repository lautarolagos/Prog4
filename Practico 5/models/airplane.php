<?php
    namespace models;
    class airplane extends aerial
    {
        private $capacity;

        function __construct($name, $engineQuantity, $capacity)
        {
            parent::__construct($name, $engineQuantity);
            $this->capacity=$capacity;
        }

        public function getCapacity()
        {
            return $this->capacity;
        }
        public function setCapacity($capacity)
        {
            $this->capacity=$capacity;
        }
        public function __toString()
        {
            return parent::__toString() . " | Capacity: $this->capacity";
        }
    }
?>