<?php
//Colas o Queue
//Las podemos representar con una cola de una banco o de un peaje

//Firs In, First Out -> FIFO
//el primero en entrar , va ser el primero en salir.

$queue =[];

array_push($queue,1);
print_r($queue);
array_push($queue,4);
print_r($queue);
array_shift($queue);
print_r($queue);

$queue2 = new SplQueue();

$queue2->enqueue(9);
$queue2->enqueue(6);
$queue2->enqueue(7);

print_r($queue2);

$queue2->dequeue();
print_r($queue2);
?>