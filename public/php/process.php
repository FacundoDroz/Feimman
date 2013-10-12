<?php
session_start();

$domainRae              =       "http://lema.rae.es/drae/?val=";
$word                   =       $_POST['word'];
$entireLink             =       $domainRae . $word;

$noResult               =       "Su búsqueda no produjo resultados";      
              
$_SESSION['result']     =       $entireLink;

header('Location: ../result.php');
?>