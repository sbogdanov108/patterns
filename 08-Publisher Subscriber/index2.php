<?php

include_once 'component.php';
include_once 'dispatcher.php';

$componentA = new Component( 'Component A' );
$dispatcher = Dispatcher::getInstance();

$componentB = new Component( 'Component B' );
$dispatcher::subscribe( $componentA, $componentB );

$componentC = new Component( 'Component C' );
$dispatcher::subscribe( $componentA, $componentC );

$componentD = new Component( 'Component D' );
$dispatcher::subscribe( $componentB, $componentD );

/**
 * Если что-то важное произошло с компонентом A и B, тогда компоненты C, D автоматически уведомляются
 */

$componentA->doSomething();