<?php

include_once('/../src/Circle.php');

class CircleTest extends \PHPUnit_Framework_TestCase
{
    private $circle;

    protected function setUp()
    {
        $this->circle = new \Shapes\Circle(90);
    }

    protected function tearDown()
    {
        $this->circle = NULL;
    }

    public function testArea()
    {
        $result = $this->circle->area();
        $this->assertEquals(29.8, $result);
    }
}