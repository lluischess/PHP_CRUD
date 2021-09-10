<?php
namespace App\Tests;

use App\HolaMundo;
use PHPUnit\Framework\TestCase;

class HolaMundoTest extends TestCase
{
    public function testDiceHolaMundoCuandoSaluda(){
        $holaMundo = new HolaMundo();

        $this->assertEquals('hola mundo',$holaMundo->saluda());
    }
}
