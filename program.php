<?php

   $v =  $_GET["x"]; //Linking Variable V with an integer x

   $msg = "";

if(is_numeric($v))
{
  for($a = 1; $a <= 10 ; $a++) //Using For Loop
  {
     $mul = $v * $a;
     $msg = $msg.(int)$v." * ".$a." = ".$mul; //echo represents for Printing
     $msg = $msg."<br>";
  }
  $result = array( 'input' => $_GET["x"], 'result' => $msg);
  echo json_encode( $result);
}
else
{ 
     $msg = "Not a valid number";
     $result = array( 'input' => $_GET["x"], 'result' => $msg);
     echo json_encode( $result);
   }

?>
   
