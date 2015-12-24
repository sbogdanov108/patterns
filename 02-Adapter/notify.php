<?php

class Notify
{
  protected $username = '';
  protected $password = '';

  public function __construct( $username, $password )
  {
    $this->username = $username;
    $this->password = $password;
  }

  /**
   * Выбор нужного метода на основе анализа входящих параметров
   *
   * @param        $to
   * @param        $from
   * @param        $body
   * @param string $subject
   *
   * @return mixed
   */
  public function send( $to, $from, $body, $subject = '' )
  {
    // Если не определена тема сообщения, значить мы отправляем смс
    if ( '' == $subject )
      return $this->sendSMS( $to, $from, $body );
    else
      return $this->sendEmail( $to, $from, $body, $subject );
  }

  /**
   * Отправить текстовое сообщение
   *
   * @param $to
   * @param $from
   * @param $body
   *
   * @return mixed
   */
  protected function sendSMS( $to, $from, $body )
  {
    $twilio = new Services_Twilio( $this->username, $this->password );

    $message = $twilio->account->messages->sendMessage(
      $from,
      $to,
      $body
    );

    return $message;
  }

  /**
   * Отправить email
   *
   * @param $to
   * @param $from
   * @param $body
   * @param $subject
   *
   * @return mixed
   */
  protected function sendEmail( $to, $from, $body, $subject )
  {
    $sendgrid = new SendGrid( 'username2', 'password 2' );
    $email = new SendGrid\Email( $this->username, $this->password );

    $email
      ->addTo( $to )
      ->setFrom( $from )
      ->setSubject( $subject )
      ->setText( $body )
      ->setHtml( $body );

    return $sendgrid->send( $email );
  }
}