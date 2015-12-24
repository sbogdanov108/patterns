<?php

class Output
{
  protected $formatter = null;

  public function __construct( $formatter )
  {
    $this->formatter = $formatter;
  }

  /**
   * Назначение стратегии обработки
   *
   * @param $formatter
   */
  public function setStrategy( $formatter )
  {
    $this->formatter = $formatter;
  }

  /**
   * Вывод данных на основе назначенной стратегии
   *
   * @param      $inputA
   * @param null $inputB
   *
   * @return mixed
   */
  public function display( $inputA, $inputB = null )
  {
    return $this->formatter->output( $inputA, $inputB );
  }
}