<?php
    class db {
    
      private $login = 'root';
      private $pass = 'mV3+ZRF3xULNqz'; 
      private $name_base = 'magazine_lession';
      
      function connect($host) {
        $link = new mysqli( $host, $this->login, $this->pass, $this->name_base);
        return $link;
      }
      function extendConnect($host) {
        $link = new mysqli( $host, $this->login, $this->pass, $this->name_base);
        return $link;
      }

      function __construct($host='localhost') {
        return $this -> connect($host);
      }
    } 
