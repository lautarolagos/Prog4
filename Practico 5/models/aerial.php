<?php
    namespace models;
    class aerial extends transport
    {
        private $engineQuantity;

        function __construct($name, $engineQuantity)
        {
            parent::__construct($name);
            $this->engineQuantity=$engineQuantity;
        }

        public function getEngineQuantity()
        {
            return $this->engineQuantity;
        }
        public function setEngineQuantity($engineQuantity)
        {
            $this->engineQuantity=$engineQuantity;
        }
        public function __toString()
        {
            return parent::__toString() . " | Engine Quantity: $this->engineQuantity";
        }
    }
?>