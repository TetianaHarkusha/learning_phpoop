<?php

namespace Task18;

//This interface declares the methods required by the 3D geometry figures classes
interface iFigure3d
{
    public function getVolume(); //calculates the volumes of 3D geometry figures
    public function getSurfaceSquare(); //calculates the surface square of 3D geometry figures
}
