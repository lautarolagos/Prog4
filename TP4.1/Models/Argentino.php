<?php
    namespace Models;
    class Argentino extends Greet
    {
        public function sayHi()
        {
            $this->setMsg("Hola, como estas?");
        }
        public function sayGoodbye()
        {
            $this->setMsg("Nos vemos!");
        }
        function sayAnother($msg)
        {
            $this->setMsg($msg);
        }
    }
?>