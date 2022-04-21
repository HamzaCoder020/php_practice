<?php

 $value = "      ";
 $min = 3;
 if(strlen($value)<$min){
     echo "Form inValid";
 }


 $value = trim($value);
 if(!isset($value) || $value === ""){
     echo "validation failed";
 }

?>
