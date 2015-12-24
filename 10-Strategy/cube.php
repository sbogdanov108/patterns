<?php

class Cube
{
  /**
   * Вычислить площадь куба
   *
   * @param $input
   *
   * @return mixed
   */
  public function output( $input )
  {
    return 6 * pow( $input, 2 );
  }
}