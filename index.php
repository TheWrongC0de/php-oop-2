<?php
class Persona {
    public $nome;
    public $cognome;
    function __construct($nome, $cognome)
    {
        // valorizzazione delle variabili con parametri
        $this-> nome = $nome;
        $this-> cognome = $cognome;
    }
    public function __toString()
    {
        
        return "Nome :". $this->nome . "<br>" ."Cognome :". $this->cognome ;
    }
}
class Ospite extends Persona{
    public $annoDiNascita;
    function __construct($nome, $cognome, $annoDiNascita)
    {
        parent::__construct($nome, $cognome);

        $this-> annoDiNascita = $annoDiNascita;
    }
    public function __toString()
    {

       return parent::__toString()."<br> Anno di Nascita :".$this->annoDiNascita;
    }
}
class Pagante extends Persona{
    public $indirizzoFatturazione;
    function __construct($nome, $cognome, $indirizzoFatturazione)
    {
        parent::__construct($nome, $cognome);
        $this-> indirizzoFatturazione = $indirizzoFatturazione;
    }
    public function __toString()
    {
       return parent::__toString()."<br> IndirizzoFatturazione :".$this->indirizzoFatturazione;
    }
}
echo "<br>---------------<br>";
$persona = new Persona("Simone","Ugazio");
echo "Persona"."<br>";
echo $persona;
echo "<br>---------------<br>";
$ospite = new Ospite("Marta","Buccoliero","07/4/1997");
echo "Ospite"."<br>";
echo $ospite;
echo "<br>---------------<br>";
$pagante = new Pagante("Federico","Castiglioni","02/01/1995");
echo "Pagante"."<br>";
echo $pagante;
