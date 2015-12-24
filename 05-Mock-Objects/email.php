<?php

class Email
{
  protected $to = '';
  protected $from = '';
  protected $body = '';
  protected $subject = '';

  /**
   * Установка необходимых свойств для email
   *
   * @param $to
   * @param $from
   * @param $subject
   * @param $body
   */
  public function setProperties( $to, $from, $subject, $body )
  {
    $this->to = $to;
    $this->from = $from;
    $this->subject = $subject;
    $this->body = $body;
  }

  /**
   * Отправка email стандартной функцией php
   *
   * @return bool
   */
  public function send()
  {
    echo __CLASS__ . " - This would have sent an email.";

//    return mail($this->to, $this->subject, $this->body);
  }
}