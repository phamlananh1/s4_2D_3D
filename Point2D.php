<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 13:40
 */

class Point2D
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($y)
    {
        $this->y;
    }
    public function setXY($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        $arr[] = $this->x;
        $arr[] = $this->y;
        return json_encode($arr);
    }
    public function __toString()
    {
        return "Point2D: " . $this->getXY() . "<br>";
    }
}
class Point3D extends Point2D{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setZ($z){
        $this->z;
    }
    public function getXYZ(){
        $arr[] = parent::getX();
        $arr[] = parent::getY();
        $arr[] = $this->z;
        return json_encode($arr);
    }
    public function __toString()
    {
        return "Point3D: " . $this->getXYZ() . "<br>";
    }
}
$point2d = new Point2D(4,3);
echo $point2d;
$point3d = new Point3D(5,6,7);
echo $point3d;
?>

