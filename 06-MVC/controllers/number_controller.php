<?php

class NumberController extends DefaultController
{
  public $model = null;

  public function __construct()
  {
    $this->model = new NumberModel(); // загрузка модели
  }

  /**
   * Рендер шаблона и передача в него необходимых данных
   *
   * @param int $value
   */
  public function view( $value = 0 )
  {
    $model = $this->model;

    include 'views/view_number.php';
  }
}