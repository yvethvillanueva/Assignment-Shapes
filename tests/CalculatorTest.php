<?php

include_once('/../src/Calculator.php');
include_once('/../src/Square.php');
include_once('/../src/Circle.php');
include_once('/../src/Cube.php');
include_once('/../src/Sphere.php');

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $calculator;
    private $square;
    private $circle;
    private $cube;
    private $sphere;

    private $shapes;

    protected function setUp()
    {
        $this->calculator = new \Shapes\Calculator();
        $this->square = new \Shapes\Square(20);
        $this->circle = new \Shapes\Circle(90);
        $this->cube = new \Shapes\Cube(15);
        $this->sphere = new \Shapes\Sphere(10);

        $this->shapes = [ $this->square, $this->circle, $this->cube, $this->sphere ];
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
        $this->squaree = NULL;
        $this->circle = NULL;
        $this->cube = NULL;
        $this->sphere = NULL;
    }

    public function testSurfaceArea()
    {
        $result = $this->calculator->surfaceArea($this->shapes);
        $this->assertEquals(2640.91, $result);
    }

    public function testTotalVolume()
    {
        $result = $this->calculator->totalVolume($this->shapes);
        $this->assertEquals(7563.79, $result);
    }
}