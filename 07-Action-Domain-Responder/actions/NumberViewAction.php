<?php

/**
 * Класс для действия number
 *
 * Class NumberViewAction
 */
class NumberViewAction
{
  protected $response = null;

  /**
   * Запуск действия number
   *
   * @param $number
   */
  public function run( $number )
  {
    $this->response = new NumberViewResponse();
    $this->response->number = $number;
    $this->response->run();
  }
}