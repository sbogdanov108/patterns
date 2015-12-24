<?php

class Connection
{
  private function __construct()
  {
    echo 'Это создает новый объект! <br />';
  }

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
    else
      echo 'А это использует тот же объект, что и был до этого! <br />';

    return $instance;
  }
}