<?php

    namespace app\MySQLConnection;
    
    class MySQLConnection extends \PDO{
        public function __construct(){
            parent::__construct('mysql:host=localhost;dbname=dados', 'root', '');
        }
    }
?>