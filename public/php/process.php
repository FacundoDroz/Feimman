<?php
session_start();

$domainRae              =       "http://buscon.rae.es/drae/srv/search?val=";
$word                   =       $_POST['word'];
$entireLink             =       $domainRae . $word;

$players = array(); 
$content = file_get_contents("http://buscon.rae.es/drae/srv/search?val=".$_POST['word']);
if (preg_match_all("|<span class=\"f\"><b>(.*)<b></span>|", $content , $matchs , PREG_PATTERN_ORDER )  ) 
{ 
        foreach( $matchs[0] as $k => $v ) 
        { 
                $players[] = array( trim(strip_tags($matchs[0][$k])) ); 
        } 

} 
print_r($players);

$noResult               =       "Su búsqueda no produjo resultados";      
              
$_SESSION['result']     =       $entireLink;

header('Location: ../result.php');
?>