<?php

include_once 'component.php';
include_once 'dispatcher.php';

$componentA = new Component( 'Component A' );
$dispatcher = Dispatcher::getInstance();

$componentB = new Component( 'Component B' );
$dispatcher::subscribe( $componentA, $componentB );

$componentC = new Component( 'Component C' );
$dispatcher::subscribe( $componentA, $componentC );

/**
 * Если что-то важное произошло с компонентом A, тогда компоненты B, C автоматически уведомляются
 */

$componentA->doSomething();