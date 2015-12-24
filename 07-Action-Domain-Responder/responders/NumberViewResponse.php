<?php

/**
 * Класс ответного действия
 *
 * Class NumberViewResponse
 */
class NumberViewResponse
{
  protected $domain = null;
  public $number = 0;

  public function __construct()
  {
    $this->domain = new Number();
  }

  /**
   * Запуск ответного действия
   */
  public function run()
  {
    $value = $this->domain->square( $this->number );

    include 'templates/view_number.php';
  }
}