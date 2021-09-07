<?php

namespace src\model\entities;

use src\model\entities\AbstractShape;

class Rectangle extends AbstractShape {

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    public function __construct(string $color, float $width, float $height)
    {
        parent::__construct($color);
        
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}