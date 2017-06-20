<?php

class Endereco{
    
    private $logradouro;
    private $numero;
    private $cidade;
    
    public function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }
    
}

$meuendereco = new Endereco("rua amancio valente", "1555", "fortaleza");

var_dump($meuendereco);

?>
