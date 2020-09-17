<?php
    namespace Models;
    class Portuguese extends Greet
    {
        public function sayHi()
        {
            $this->setMsg("Oi, como vai?");
        }
        public function sayGoodbye()
        {
            $this->setMsg("Até logo");
        }
        function sayAnother($msg)
        {
            $this->setMsg($msg);
        }
    }
?>