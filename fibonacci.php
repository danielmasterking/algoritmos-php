<?php
function Obtenerfibonacci($n)
{
    $fibonacciArray  = [0,1];
 
  for($i=2;$i<=$n;$i++)
    {
        $fibonacciArray[] = $fibonacciArray[$i-1]+$fibonacciArray[$i-2];
    }
    echo $fibonacciArray[$n];
}
 
Obtenerfibonacci(15);