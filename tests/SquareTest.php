<?php

include_once('/../src/Square.php');

class SquareTest extends \PHPUnit_Framework_TestCase
{
    private $square;

    protected function setUp()
    {
        $this->square = new \Shapes\Square(25);
    }

    protected function tearDown()
    {
        $this->square = NULL;
    }

    public function testArea()
    {
        $result = $this->square->area();
        $this->assertEquals(5, $result);
    }
}