<?php

include_once('/../src/Cube.php');

class CubeTest extends \PHPUnit_Framework_TestCase
{
    private $cube;

    protected function setUp()
    {
        $this->cube = new \Shapes\Cube(15);
    }

    protected function tearDown()
    {
        $this->cube = NULL;
    }

    public function testArea()
    {
        $result = $this->cube->area();
        $this->assertEquals(1350, $result);
    }

    public function testVolume()
    {
        $result = $this->cube->volume();
        $this->assertEquals(3375, $result);
    }
}