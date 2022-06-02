<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
    
    private $corPelo;
    
    //metodos
    
    public function alimentar() 
    {
        echo "<br><p>Mamando</p>";
    }

    public function emitirSom() 
    {
        echo "<br><p>Som de Mamifero</p>";
    }

    public function locomover() 
    {
        echo "</br><p>Correndo</p>";
    }
     
    //metodos especiais
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }
    
}
