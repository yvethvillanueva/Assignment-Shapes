<?php

namespace Shapes;

include_once('ShapeInterface.php');

interface Shape3DInterface extends ShapeInterface {
    /**
     * Get the volume
     *
     * @return int
     */
    public function volume();
}