<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Mamifero.php';  
           require_once 'Cachorro.php';  
           require_once 'Lobo.php';  
           
           
           $m = new Mamifero();           
           $m->emitirSom();
           
           $l = new Lobo();           
           $l->emitirSom(); 
                        
           $c = new Cachorro();          
           $c->emitirSom();
           echo "<br/>____________________________________________________";
           //teste gambiarra imitando Polimorfismo de sobrecarga..
           
           echo "<br/>";
           $c->reagirFrase("Olá");
           $c->reagirFrase("Vai deitar!");
           echo "<br/>";
           $c->reagirHora(11,45);
           $c->reagirHora(21,00);
           echo "<br/>";
           $c->reagirDono(true);
           $c->reagirDono(false);
           
           
           
           
           
               
       
        ?>
        </pre>
    </body>
</html>
