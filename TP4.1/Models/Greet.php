<?php
    namespace Models;
    abstract class Greet
    {
        private $msg;

        function __construct(){}

        abstract function sayHi();
        abstract function sayGoodbye();
        abstract function sayAnother($msg);

        function setMsg($msg)
        {
            $this->msg=$msg;
        }
        function getMsg()
        {
            return $this->msg;
        }
    }
?>