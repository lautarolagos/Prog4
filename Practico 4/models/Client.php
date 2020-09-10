<?php
    namespace models;
    class Client extends Person
    {
        private $username;
        private $password;

        function __construct($id, $firstName, $lastName, $dni, $email ,$username, $password)
        {
            parent::__construct($id, $firstName, $lastName, $dni, $email);
            $this->username=$username;
            $this->password=$password;
        }

        public function setUsername($username)
        {
            $this->username=$username;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function setPassword($password)
        {
            $this->password=$password;
        }
        public function getPassword()
        {
            return $this->password;
        }
    }

?>