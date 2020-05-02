<?php


function soma(float ...$valores):float {

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo '<br>';
echo soma(25, 33);
echo '<br>';
echo soma(1.6, 5.3, 6.8, 7.7, 8.3);
echo '<br>';