<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=sigpruebas", "root", "");

        return $bd;
    }
}