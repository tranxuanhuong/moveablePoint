<?php


class Point
{
    public $x;
    public $y;
    public $arrayXY=[];

    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;

    }
    public function Point(){

    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }

   public function getXY(){

        array_push($this->arrayXY,$this->x,$this->y);
        return $this->arrayXY;
   }

    public function toString(){

        foreach($this->getXY() as $value ){
            echo $value;

            echo "";

        }
    }

}