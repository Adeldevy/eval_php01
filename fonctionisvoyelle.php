<?php
//1er exercice ecrire une fonction qui reconnait les voyelles (majuscule miniscule)et renvoyer la mention true :
/* le fonction isvoyelle en booleen la fonction en question comprend une chaine ($chaine): string
voyelle majusc minis renvoyer la mention true , autre types = erreur " " =rien faire.
*/
function isvoyelle($lettre)
{  
  $voyelle= false;

  //vérifier si la variable $lettre est une chaine (is-string) ou pas .

  if ( is_string($lettre) && strlen($lettre)==1 ) {

      // echo "vérification de la lettre effectuée \n";
    $lettre = strtoupper($lettre); //ecrire les variables en majuscule.

    if ( 
      ($lettre=='A') ||
      ($lettre=='E') ||
      ($lettre=='U') ||
      ($lettre=='I') ||
      ($lettre=='O') ||
      ($lettre=='Y')
      ) {
      $voyelle=true;  
    }

  } else {
    var_dump($lettre);
    echo "parametre erroné \n" ;    
  } 
        
  return($voyelle);         
}