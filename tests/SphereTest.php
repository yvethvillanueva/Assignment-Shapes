<?php

include_once('/../src/Sphere.php');

class SphereTest extends \PHPUnit_Framework_TestCase
{
    private $sphere;

    protected function setUp()
    {
        $this->sphere = new \Shapes\Sphere(10);
    }

    protected function tearDown()
    {
        $this->sphere = NULL;
    }

    public function testArea()
    {
        $result = $this->sphere->area();
        $this->assertEquals(1256.64, $result);
    }

    public function testVolume()
    {
        $result = $this->sphere->volume();
        $this->assertEquals(4188.79, $result);
    }
}