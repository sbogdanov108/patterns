<?php

/**
 * Класс паттерна Active Record являет собой представление таблицы User в базе данных
 *
 * Class User
 */
class User
{
  protected $connection = null;

  public function __construct()
  {
    $this->connection = new PDO( "mysql:host=localhost;dbname=sqlDB", 'login', 'password' ); // подключение к дб
  }

  /**
   * Получение пользователя по его ид
   *
   * @param $id
   */
  public function load( $id )
  {
    $sql = 'SELECT * FROM users WHERE user_id = ' . (int) $id;
    $result = $this->connection->query( $sql );
    $row = $result->fetch( PDO::FETCH_ASSOC );

    foreach ( $row as $column => $value )
    {
      $this->$column = $value;
    }
  }

  // далее идёт реализация методов CRUD
}