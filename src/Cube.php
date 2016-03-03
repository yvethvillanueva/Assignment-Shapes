<?php

namespace Shapes;

include_once('Shape3DInterface.php');

class Cube implements Shape3DInterface {

	protected $side;

	/**
	 * Cube constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($side)
	{
		$this->side = $side;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
        return round(6 * ($this->side * $this->side), 2);
	}

    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return round(($this->side * $this->side * $this->side), 2);
    }

	/**
	 * Get the perimeter
	 * NOTE: For a circle/sphere this is also known as circumference
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 2 * pi() * $this->side;
	}

}
