<?php

class Contact{
    private $host = "localhost";
    private $username = 'root';
    private $password = "";
    private $db = "listaproduktevedb";
    public $mysqli;
    
        public function __construct() {
            return $this->mysqli=new mysqli($this->host, $this->username, $this->password, $this->db);
}
 

public function subscribe($data) {
    $email = $data['email'];
    $q = "insert into subscribe set  email='$email'";
    return $this->mysqli->query($q);
}
}

