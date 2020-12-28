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
 

public function kontaktet($data) {
    $fname = $data['emri'];
    $email = $data['email'];
    $subject = $data['subjekti'];
    $message = $data['mesazhi'];
    $q = "insert into kontaktet set emri='$fname', email='$email', subjekti='$subject', mesazhi='$message'";
    return $this->mysqli->query($q);
}
}

