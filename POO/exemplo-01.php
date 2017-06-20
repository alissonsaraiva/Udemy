<?php

class Pessoa {
    
    public $nome;
    
    public function falar() {
        
        return "O meu nome é " .$this->nome;
        
    }
}

$alisson = new Pessoa();
$alisson->nome = "Alisson Saraiva";
echo $alisson->falar();

?>

