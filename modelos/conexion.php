<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost:3309;dbname=web-wedding-4a", "root", "");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
?>