<?php
    namespace model;
    class user
    {
        private $username;
        private $password;
        private $firstName;
        private $lastName;
        private $email;
        //function __construct($username=null, $password=null, $firstName=null, $lastName=null, $email=null)
        function __construct($username, $password, $firstName, $lastName, $email)
        {
            $this->username=$username;
            $this->password=$password;
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->email=$email;
        }
        public function setUsername($username)
        {
            $this->username=$username;
        }
        public function setPassword($password)
        {
            $this->password=$password;
        }
        public function setFirstName($firstName)
        {
            $this->firstName=$firstName;
        }
        public function setLastName($lastName)
        {
            $this->lastName=$lastName;
        }
        public function setEmail($email)
        {
            $this->email=$email;
        }
        public function getUsername()
        {
            return $this->username;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function getFirstName()
        {
            return $this->firstName;
        }
        public function getLastName()
        {
            return $this->lastName;
        }
        public function getEmail()
        {
            return $this->email;
        }
    }
?>