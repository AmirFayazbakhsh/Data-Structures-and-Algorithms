<?php


include "queue.php";
$queue = new queue(20);
$queue->enqueue('30');
$queue->enqueue('32');
$queue->enqueue('12');
$queue->dequeue();

print_r($queue->stack);



?>