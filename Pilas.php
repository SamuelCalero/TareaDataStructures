<?php 
$array = [2,5,10,5];

//Pilas 
//Una pila de datos
//Ingresa un dato al final y elimina el ultimo dato
//Last in, Firs Out -> LIFO

$pila = [];

//Metodo para agregar
array_push($pila,1);
print($pila);  //[1]
array_push($pila,4);
print_r($pila);  //[1,4]

//Metodo para quitar
array_pop($pila);
print_r($pila);//[1]


$pilas2 = new SplStack();

$pilas2->push(6);
print_r($pilas2);
$pilas2->push(7);
print_r($pilas2);

$pilas2->pop();
print_r($pilas2);
?>