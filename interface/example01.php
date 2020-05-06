<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {


    public function acelerar($velocidade) {

        echo "O veículo acelerou até: " . $velocidade;
    }

    public function frenar($velocidade) {

        echo "O veículo frenou até: " . $velocidade;
    }

    public function trocarMarcha($marcha) {

        echo "O veículo foi até a marcha: " . $marcha;
    }
}

$carro = new Civic();
$carro->acelerar("100");
echo "<br>";
$carro->frenar("20");
echo "<br>";
$carro->trocarMarcha("3");