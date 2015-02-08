<?php

namespace Angelor\Component\Parameter\Tests;

use Angelor\Component\Parameter\Parameter;

class ParameterTest extends \PHPUnit_Framework_TestCase
{
    public function testGetParamters()
    {
        $p = new Parameter('pippo, pluto,paperino');
        
        $this->assertEquals('pippo,pluto,paperino',(string)$p);
        $this->assertEquals('pippo',$p->getParameters()[0]);
        $this->assertEquals(3,count($p->getParameters()));
    }
}
