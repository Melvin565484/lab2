<?php

    class Vehiculo{
    public $matricula;
    public $modelo;
    public $potenciacv;

    function __construct($matricula, $modelo, $potenciacv){
        $this->matricula=$matricula;
        $this->modelo=$modelo;
        $this->potenciacv=$potenciacv;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getPotenciaCV(){
        return $this->potenciacv;
    }
    
}

    class Taxi extends Vehiculo{
        public $numlicencia;
        
        function __construct($matricula, $modelo, $potenciacv,$numlicencia){
            parent::__construct($matricula, $modelo, $potenciacv);
            $this->numlicencia=$numlicencia;
        }
        
        public function setNumeroLicencia($numlicencia1){
            if (is_numeric($numlicencia1)){
                $this->numlicencia = $numlicencia1;
            } else {
                throw new Exception("Numero de licencia no válido");
            }
        }

        public function getNumeroLicencia(){
            return $this->numlicencia;
        }
        
    }

    class Autobus extends Vehiculo{
        public $numeroplaza;

        
        function __construct($matricula, $modelo, $potenciacv,$numeroplaza){
            parent::__construct($matricula, $modelo, $potenciacv);
            $this->numeroplaza=$numeroplaza;
        }

        public function setNumeroPlazas($plaza){
            if (is_numeric($plaza)){
                $this->numeroplaza = $plaza;
            } else {
                throw new Exception("Por favor ingrese un numero ");
            }
        }

        public function getNumeroPlazas(){
            return $this->numeroplaza;
        }

    }
$vehiculo = new Vehiculo ("P124598", "Porche", 911);
            echo"<h2>Laboratorio 2</h2>".
            "<h3>Vehiculo</h3>".
            "Matricula: ".$vehiculo->getMatricula()."<br/>".
            "Modelo: ".$vehiculo->getModelo()."<br/>".
            "Potencia CV: ".$vehiculo->getPotenciaCV()."<br/>";


$taxi = new Taxi("P7852369","Porsche Carrera 4GTS","480", 7891512);
            $taxi->setNumeroLicencia(78527258);
            echo
            "<h3>Taxi</h3>".
            "Matricula: ".$taxi->getMatricula()."<br/>".
            "Modelo: ".$taxi->getModelo()."<br/>".
            "Potencia CV: ".$taxi->getPotenciaCV()."<br/>".
            "Numero de Licencia: ".$taxi->getNumeroLicencia()."<br/>";


$autobus = new Autobus("P66652369","BMW M3","510", 7);
            $autobus->setNumeroPlazas(8);
            echo
            "<h3>Autobus</h3>".
            "Matricula: ".$autobus->getMatricula()."<br/>".
            "Modelo: ".$autobus->getModelo()."<br/>".
            "Potencia CV: ".$autobus->getPotenciaCV()."<br/>".
            "Numero de Plazas: ".$autobus->getNumeroPlazas()."<br/>";
?>