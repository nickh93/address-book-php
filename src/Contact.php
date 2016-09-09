<?php

    class Contact {

        private $contact_name;
        private $contact_phone;
        private $contact_address;

        function __construct($name, $phone, $address) {
            $this->contact_name = $name;
            $this->contact_phone = $phone;
            $this->contact_address = $address;
        }
        function setName($name){
            $this->contact_name = (string) $name;
        }
        function getName(){
            return $this->contact_name;
        }
        function setPhone($phone){
            $this->contact_phone = (string) $phone;
        }
        function getPhone(){
            return $this->contact_phone;
        }
        function setAddress($address){
            $this->contact_address = (string) $address;
        }
        function getAddress(){
            return $this->contact_address;
        }
        function save(){
            array_push($_SESSION['list_of_contacts'], $this);
        }
        static function getAll(){
            return $_SESSION['list_of_contacts'];
        }
        static function deleteAll(){
            $_SESSION['list_of_contacts'] = array();
        }
    }

?>
