<?php
    namespace models;
    class ship extends maritime
    {
        private $propelQuantity;

        function __construct($name, $maxKnots, $propelQuantity)
        {
            parent::__construct($name, $maxKnots);
            $this->propelQuantity=$propelQuantity;
        }

        public function getPropelQuantity()
        {
            return $this->propelQuantity;
        }
        public function setPropelQuantity($propelQuantity)
        {
            $this->propelQuantity=$propelQuantity;
        }
        public function __toString()
        {
            return parent::__toString() . " | Propel Quantity: $this->propelQuantity";
        }
    }
?>