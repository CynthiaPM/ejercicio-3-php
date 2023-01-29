<?php 
class Employee{
    protected $nombre;
    protected $sueldo;

    public function initialize($nombre,$sueldo) {
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }

    public function print (){

        if($this->sueldo > 6000) {
            echo $this->nombre." debe pagar impuestos </br>";
        }else {
            echo $this->nombre." no debe pagar impuestos </br>";
        }
    }
}

$empleado1 = new Employee();
$empleado1->initialize("Jhon",7000);
$empleado1->print();

?>