<?php

if($_GET)
  {
    //get the post value from form
    $a = $_GET["x"];
    $b = $a;
    $sum = 0;
    if ($a < 10){
      echo "Enter more than ONE Digit Number";
    }
    else{
    while($a != 0)
    {
      $x = $a % 10;
      $sum = ($sum*10) + $x;
      $a = (int)($a/10) ;
    }
    //check if the number and reverse is equal
    if($b == $sum){ 
       $result = array( 'input' => $_GET["x"], 'result' => "Palindrome");
       echo json_encode($result);
    }else{
      $result = array( 'input' => $_GET["x"], 'result' => "Not a Palindrome");
      echo json_encode($result); 
    }
 }
  } 
 
?>
