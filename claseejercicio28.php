<?php

class buyCar{

    private static $discount = 4500;

    public function __construct(
        private string $gama,
        private int $priceBase = 0
    ){
        if($gama == 'Economy'){
            $this->priceBase = 10000;
        } elseif($gama == 'Midsize'){
            $this->priceBase = 20000;
        } elseif($gama == 'Luxury'){
            $this->priceBase = 30000;
        } else {
            return 'Gama no valid';
        }
    }

    function climatizador(){

        $this->priceBase += 2000;
    }

    function navegadorGPS(){
        $this->priceBase += 2500;
    }
    function tapiceriaCuerto($color){

        if($color == 'White'){
            $this->priceBase += 3000;
        }else if($color == 'Beige'){
            $this->priceBase += 3500;
        }else{
            $this->priceBase += 5000;
        }
    }

    function priceFinal(){
        $priceFinal = $this->priceBase-self::$discount;
        return $priceFinal;
    }
}