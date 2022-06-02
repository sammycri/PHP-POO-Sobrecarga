<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
   //metodos
    public function enterrarOsso()
    {
        echo "Enterrando osso..";
    }
    
    public function abanarRabo()
    {
        echo "Abanando o rabinho...";
    } 
    
    public function emitirSom() 
    {
        echo "<br><p>Au au au (latindo)</p>";
    }
    
    // cambiarra para substituir Polimorfismo de sobrecarga(não suportado pela linguagem php)
    
    function reagirFrase($frase)
    {
        if($frase == "Comida" || $frase == "Olá")
        {
            echo "<p> Abanar o rabo e latir</p>";
        }
        else
        {
            echo "<p> Rosnar </p>";
        }
    }
    function reagirHora($hora)
    {
        if($hora < 12)
        {
            echo "<p>Abanar</p>";
        }
        elseif ($hora >= 18)
        {
            echo "<p> Ignorar </p>";
        }
        else
        {
            echo "<p>Abanar e Latir</p>";
        }
        
    }
    function reagirDono($dono)
    {
        if($dono)
        {
            echo "<p>Abanar</p>";
        }
        else 
        {
            echo "<p>Latir</p>";
        }
    }
    
}
