<?php
$mot = readline('veuillez entrer un mot:  ');

$reverse = strrev($mot);
if ($mot === $reverse){
    echo 'ce mot est un palyndrome';
    
}else {
    echo'ce mot nest pas un palyndrome'; 
}
