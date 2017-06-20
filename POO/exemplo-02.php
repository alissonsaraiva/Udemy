<?php

class Carro {
    
    private $modelo;
    private $motor;
    private $ano;
    
    function getModelo() {
        return $this->modelo;
    }

    function getMotor() {
        return $this->motor;
    }

    function getAno() {
        return $this->ano;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMotor($motor) {
        $this->motor = $motor;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }
    
    public function exibir() {
        
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
        
    }
   
}

$meucarro = new Carro();
$meucarro->setModelo("VW");
$meucarro->setMotor("1.0");
$meucarro->setAno("2017");

print_r($meucarro->exibir());

?>
