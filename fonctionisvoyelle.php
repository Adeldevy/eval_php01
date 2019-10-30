<?php

function isvoyelle($lettre){  
$voyelle="aAeEiIuUoO";


     if ($lettre==$voyelle){

            echo 'est une voyelle';

                  } else {

                echo  'ce n est pas une voyelle donc une consonne';
                        }
            return($lettre);         
}
                                     
?>