<?php

include_once 'email.php';

/**
 * Класс, создающий mock объект, который служит для тестирования
 *
 * Class MockEmail
 */
class MockEmail extends Email
{
  /**
   * Меняет работу оригинального метода send() в целях тестирования
   *
   * @return bool
   */
  public function send()
  {
    echo __CLASS__ . " - This would not have sent an email.";

    return true;
  }
}