<?php
function couleurIndicateur($arg) {
$couleur = '';
 switch($arg) {
   case '9': $couleur = '#000';
   break;
   case '8': $couleur = '#f08a00';
   break;
   case '7': $couleur = '#89ba17';
   break;
   case '6': $couleur = '#51656f';
   break;
   case '5': $couleur = '#d73362';
   break;
   case '4': $couleur = '#d73362' ;
   break;
   case '3': $couleur = '#d73362';
   break;
   case '2': $couleur = '#0093d2';
   break;
   case '1': $couleur = '#0093d2' ;
   break;
   case '0': $couleur = yellow;
   break;
 }
return $couleur;
}
