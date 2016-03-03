<?php

namespace Shapes;

include_once('Shape3DInterface.php');

class Sphere implements Shape3DInterface {

    protected $radius;

    /**
     * Sphere constructor.
     *
     * @param int $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Get the area
     *
     * @return int
     */
    public function area()
    {
        return round(4 * pi() * ($this->radius * $this->radius), 2);
    }

    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return round((4/3) * pi() * ($this->radius * $this->radius * $this->radius), 2);
    }

    /**
     * Get the perimeter
     * NOTE: For a circle/sphere this is also known as circumference
     *
     * @return int
     */
    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }

}
