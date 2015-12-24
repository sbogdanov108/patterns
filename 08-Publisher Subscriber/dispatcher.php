<?php

class Dispatcher
{
  protected $listeners = array();

  protected function __construct(){}

  /**
   * Получить один экземпляр объекта
   *
   * @return static
   */
  public static function getInstance()
  {
    static $instance = null;

    if ( null === $instance )
      $instance = new static();

    return $instance;
  }

  /**
   * Нужному объекту назначается определенный подписчик
   *
   * @param $object
   * @param $subscriber
   */
  public static function subscribe( $object, $subscriber )
  {
    $instance = Dispatcher::getInstance();
    $id = spl_object_hash( $object );

    $instance->listeners[ $id ][] = $subscriber;
  }

  /**
   * Взаимодействуем с каждым подписанным объектом
   *
   * @param $object
   */
  public static function publish( $object )
  {
    $instance = Dispatcher::getInstance();
    $id = spl_object_hash( $object );

    $subscribers = $instance->listeners[ $id ];

    foreach ( $subscribers as $subscriber )
    {
      $subscriber->doSomething();
    }
  }
}