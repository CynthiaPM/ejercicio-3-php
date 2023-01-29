<?php 

class Shape{

    protected $ancho;
    protected $alto;

    public function __construct($ancho,$alto){

        $this->ancho=$ancho;
        $this->alto=$alto;        
    }
}

class Triangle extends Shape{

    public function area(){
        return ($this->ancho*$this->alto)/2;
    }
}

class Rectangle extends Shape {

    public function area(){
        return $this->ancho*$this->alto;
    }
}

//definiendo objetos

$triangulo= new Triangle(3,6);
echo "El area del triangulo es: ".$triangulo->area()."</br>";

$rectangulo= new Rectangle(6,8);
echo "El area del rectangulo es: ".$rectangulo->area()."</br>";

?>