<?php

/**
 * Класс для действия по умолчанию
 *
 * Class DefaultAction
 */
class DefaultAction
{
  protected $response = null;

  /**
   * Запуск действия
   */
  public function run()
  {
    $this->response = new DefaultResponse();
    $this->response->run();
  }
}