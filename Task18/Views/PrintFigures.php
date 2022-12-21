<?php

namespace Task18;

//Class for printing an array of objects of geometric figures
class PrintFigures
{
    //Prints square of plane figures from an array
    public static function printSquare(array $arr)
    {
        echo"\nПлощи площинних фігур: \n";
        foreach ($arr as $obj) {
            if ($obj instanceof iFigure) {
                echo $obj->getSquare() . "\n";
            }
        }
    }

    //Prints the square or the surface square for figures from an array
    public static function printAllSquare(array $arr)
    {
        echo"\nПлощи фігур або поверхонь: \n";
        foreach ($arr as $obj) {
            if ($obj instanceof iFigure) {
                echo 'площа фігури -' . $obj->getSquare() . "\n";
            } elseif ($obj instanceof iFigure3d) {
                echo 'площа поверхні -' . $obj->getSurfaceSquare() . "\n";
            }
        }
    }
}
