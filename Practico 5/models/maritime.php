<?php
    namespace models;
    class maritime extends transport
    {
        private $maxKnots;

        function __construct($name, $maxKnots)
        {
            parent::__construct($name);
            $this->maxKnots=$maxKnots;
        }

        public function getMaxKnots()
        {
            return $this->maxKnots;
        }
        public function setMaxKnots($maxKnots)
        {
            $this->maxKnots=$maxKnots;
        }
        public function __toString()
        {
            return parent::__toString() . " | Max Knots: $this->maxKnots";
        }
    }
?>