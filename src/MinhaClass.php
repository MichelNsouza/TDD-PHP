<?php

namespace michelsouza\Classes;

class MinhaClass
{

  public function somaValores(int ...$numeros): int
  {  
    $total = 0;
    foreach($numeros as $numero){
      $total += $numero;
    }
    return $total;
  }
  
}