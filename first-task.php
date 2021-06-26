<?php
#Task 1
#This function givea the range of  any number from sart to end

function rangeNum($num1,$num2){
 $allNum = range($num1,$num2);
 echo "The range of these two numbers" . " ". $num1 ." and ". $num2. " ". "are:"."<br>";
 for ($i = 0; $i < count($allNum); $i++) {
  echo $allNum[$i] ."<br>";
}
return $allNum[$i];
}

# A call of numbers between 5 and 9
 rangeNum(5,9);
 
# A call of numbers between 4 and 10
 rangeNum(4,10);


/////////////////////////////////// 
echo "<br>"; echo  "<br>";  echo   "<br>";



 
 #Task 2
 #This function takes an array of numbers and retns the sum of these numbers
 
function sum($numArray,$n) { 
  $add = 0;
  echo "The sum of numbers in this array is:"."<br>";
  
  for ($i = 0; $i < count($numArray); $i++) {
  $numArray[$i];
   $addArray = $numArray[$i];
 $add += $addArray;
  } 
  return $add . "<br>". "<br>";
}


#A call of array of numbers 2,3,4

$numArray =[2, 3, 4];

$n = sizeof($numArray);

echo  sum($numArray, $n);


#A call of numbers 54, 98, 3, 43,56,75

$numArray =[54, 98, 3, 43,56,75];

$n = sizeof($numArray);

echo  sum($numArray, $n);






















?>