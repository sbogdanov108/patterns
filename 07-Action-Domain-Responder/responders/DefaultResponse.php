<?php

/**
 * Класс ответного действия по умолчанию
 *
 * Class DefaultResponse
 */
class DefaultResponse
{
  /**
   * Запуск ответного действия по умолчанию
   */
  public function run()
  {
    include 'templates/default.php';
  }
}