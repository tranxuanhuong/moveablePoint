<?php
include_once "Point.php";

class MovalePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public $arrXySpeed=[];
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param array $arrXySpeed
     */
    public function setArrXySpeed($arrXySpeed)
    {
        $this->arrXySpeed = $arrXySpeed;
    }

    /**
     * @return array
     */
    public function getArrXySpeed()
    {
        return $this->arrXySpeed;
    }

    public function getXYSpeed(){

        array_push($this->arrXySpeed,$this->x,$this->y,$this->xSpeed,$this->ySpeed);
        return $this->arrXySpeed;
    }

    public function toString()
    {
       foreach ($this->getXYSpeed() as $value){
           echo $value;

       }
    }
    public function move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;

        return $this->x." ".$this->y;

    }

}