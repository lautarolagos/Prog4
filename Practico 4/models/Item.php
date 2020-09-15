<?php
    namespace models;
    class Item
    {
        private $name;
        private $description;
        private $price;
        private $quantity;

        // Tiraba un error que decia "Fatal error: Uncaught ArgumentCountError: Too few arguments"
        // Se soluciono de dos maneras: comentando el constructor, o sea, sacandolo
        // Y se solucion igualando los parametros a null
        //$name=null, $description=null, $price=null, $quantity=null
       /* function __construct($name=null, $description=null, $price=null, $quantity=null)
        {
            $this->name=$name;
            $this->description=$description;
            $this->price=$price;
            $this->quantity=$quantity;
        }*/

        public function setName($name)
        {
            $this->name=$name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setDescription($description)
        {
            $this->description=$description;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setPrice($price)
        {
            $this->price=$price;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setQuantity($quantity)
        {
            $this->quantity=$quantity;
        }

        public function getQuantity()
        {
            return $this->quantity;
        }
    }
?>