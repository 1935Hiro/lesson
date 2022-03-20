<?php
 //1問目
 function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }if($i % 2 <= $max){
        return $result;
    }
    echo sum();
    
//２問目
 function add($a, $b){
    $result = 0;
    for($i = $a;$i<=$b;$i++){
        $result += $i;        
    }
        return $result;
    }
    echo add();
    
//３問目
$arr = 2;
$value = array[1, 3, 5 ,7, 9];
foreach($arr*$array){
    echo $array;
    echo "\n";
}

//4問目
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
  ($i=$arr;$i<=$a,$i++);
 }
 return $max_number;
 }
 echo max_array();