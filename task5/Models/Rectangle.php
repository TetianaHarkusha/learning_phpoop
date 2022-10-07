<?php
declare(strict_types=1);
namespace Task5;

class Rectangle 
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
       $this->width = $width;
       $this->height = $height; 
    }
	
	public function getWidth(): float
    {
        return $this->width;
    }
	
	public function getHeight(): float
    {
        return $this->height;
    }

    public function getSquare(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

}
