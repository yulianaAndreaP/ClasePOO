<?php

include ('Persona.php');

//Creacion  de un objeto o instancia de la clase

$esperanzaGomez = new Persona();
echo($esperanzaGomez->nombre);
$esperanzaGomez->nombre="esperancita";
echo("<br>");
echo($esperanzaGomez->nombre);
echo("<br>");
$nombres=array("juan","Ana");
echo $nombres[0];
echo("<br>");
$esperanzaGomez->saludar($nombres[0]);

?>