<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);



include "Queue.php";
$queue = new queue(20);
$queue->enqueue('30');
$queue->enqueue('32');
$queue->enqueue('12');
$queue->dequeue();

print_r($queue->stack);



?>