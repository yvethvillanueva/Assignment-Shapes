<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
        if(empty($shapes)) return "undefined";

        $sh = 0;
        foreach($shapes as $shape)
        {
            if(!empty($shape))
            {
                $sh += $shape->area();
            }
        }

        return round($sh, 2);
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
        if(empty($shapes)) return "undefined";

        $sh = 0;
        foreach($shapes as $shape)
        {
            if(!empty($shape))
            {
                if($shape instanceof Shape3DInterface){
                    $sh += $shape->volume();
                }
            }
        }

        return round($sh, 2);
	}

}
