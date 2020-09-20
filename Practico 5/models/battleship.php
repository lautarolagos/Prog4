<?php
    namespace models;
    class battleship extends ship
    {
        private $armament;
        
        function __construct($name, $maxKnots, $propelQuantity, $armament)
        {
            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->armament=$armament;
        }

        public function getArmament()
        {
            return $this->armament;
        }
        public function setArmament($armament)
        {
            $this->armament=$armament;
        }
        public function __toString()
        {
            return parent::__toString() . " | Armament: $this->armament";
        }
    }
?>