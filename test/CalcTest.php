<?php 
namespace michelsouza\Tests;

use PHPUnit\Framework\TestCase;
use michelsouza\classes\MinhaClass as MinhaClass;

class CalcTest extends TestCase
{

  public function testSomaDoisValores()
  {
    $minhaclass = new MinhaClass();
    $valoresSomados = $minhaclass->somaValores(2, 2);
    $this->assertEquals($valoresSomados, 4);
  }
  
}