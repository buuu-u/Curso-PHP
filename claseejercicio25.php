<?php

    class Car
    {
        public function __construct(
            public int $ruedas,
            public string $color,
            public int $motor){
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

        function seleccionarColor($colorAuto,$nombreAuto)
        {
            echo "El auto $nombreAuto, es de color $colorAuto<br>";
        }

    }

    class Camion extends Car{

        public function __construct($ruedas, $color, $motor)
        {
            parent::__construct($ruedas, $color, $motor);
        }

        function seleccionarColor($colorCamion, $nombreCamion)
        {
            $this->color = $colorCamion;
            echo "El camión $nombreCamion, es de color $this->color<br>";
        }

        function arrancar(){
            parent::arrancar();
            echo "El camión ya ha arrancado...<br>";
        }
    }