<?php
    namespace models;
    class cruiser extends ship
    {
        private $capacity;

        function __construct($name, $maxKnots, $propelQuantity, $capacity)
        {
            parent::__construct($name, $maxKnots, $propelQuantity);
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