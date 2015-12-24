<?php

class DefaultController
{
  /**
   * Запуск действия с параметрами
   *
   * @param string $action
   * @param int    $id
   *
   * @return mixed
   */
  public function run( $action = 'index', $id = 0 )
  {
    if ( ! method_exists( $this, $action ) )
      $action = 'index';

    return $this->$action( $id );
  }

  /**
   * Шаблон по умолчанию
   */
  public function index()
  {
    include 'views/default.php';
  }
}