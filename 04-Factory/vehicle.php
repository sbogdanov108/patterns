<?php

/**
 * Класс паттерна декоратор производит нужный нам класс
 *
 * Class Vehicle
 */
class Vehicle
{
  /**
   * Определяет, какой класс нам нужно создать на основе входящего параметра $type
   *
   * @param $type
   * @param $wheels
   *
   * @return Car|stdClass|Truck
   */
  public static function create( $type, $wheels )
  {
    switch ( $type )
    {
      case 'car':
        return new Car( $wheels );
      case 'truck':
        return new Truck( $wheels );
      default:
        return new stdClass();
    }
  }

  /**
   * Получить имя класса
   *
   * @return string
   */
  public function getType()
  {
    return get_class( $this );
  }
}

class Car extends Vehicle {}

class Truck extends Vehicle {}