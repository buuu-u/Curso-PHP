<?php

class Car
{
    public function __construct(
        protected int $ruedas,
        protected string $color,
        protected int $motor){}

    function getRuedas()
    {
        return $this->ruedas;
    }

    function getColor()
    {
        return $this->color;
    }

    function getMotor()
    {
        return $this->motor;
    }

    function setColor($colorAuto)
    {
        $this->color = $colorAuto;
        return "El auto es de color $colorAuto<br>";
    }

    function arrancar(){
        echo "Estoy arrancando...<br>";
    }

    function girar(){
        echo "Estoy girando...<br>";
    }

    function frenar(){
        echo "Estoy frenando...<br>";
    }


}

class Camion extends Car{

    public function __construct($ruedas, $color, $motor)
    {
        parent::__construct($ruedas, $color, $motor);
    }

    function setColor($colorCamion)
    {
        $this->color = $colorCamion;
        return "El camión es de color $this->color<br>";
    }

    function arrancar(){
        parent::arrancar();
        echo "El camión ya ha arrancado...<br>";
    }
}