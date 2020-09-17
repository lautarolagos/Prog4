<?php
    namespace Models;
    class English extends Greet
    {
        public function sayHi()
        {
            $this->setMsg("Hello there!");
        }
        public function sayGoodbye()
        {
            $this->setMsg("See you later");
        }
        function sayAnother($msg)
        {
            $this->setMsg($msg);
        }
    }
?>