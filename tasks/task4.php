<?php

require '../helpers.php';

/**
 * Функция для возврата количества последовательных
 * элементов в массиве
 */ 

 function countCons(array $array)
 {
     $cnt = 0;

     for($i = 0; $i < sizeof($array) - 1; $i++)
     {
         // Если последовательные элементы одинаковы 
         if($array[$i] == $array[$i + 1])
         {
             $cnt++;
         }
     }

     return $cnt;
 }




 $array = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51];

// Распечатка массива
dump($array);

 echo countCons($array);
