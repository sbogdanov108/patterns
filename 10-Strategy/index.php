<?php

include_once 'output.php';
include_once 'square.php';
include_once 'cube.php';
include_once 'rectangle.php';

$inputA = 10;
$inputB = 20;

$output = new Output( new Square() );
echo $output->display( $inputA ) . '<br>';

$output->setStrategy( new Cube() );
echo $output->display( $inputA ) . '<br>';

$output->setStrategy( new Rectangle() );
echo $output->display( $inputA, $inputB ) . '<br>';