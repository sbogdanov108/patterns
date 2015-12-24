<?php

class UserGateway
{
  protected $connection = null;

  public function __construct()
  {
    $this->connection = new PDO( "mysql:host=localhost;dbname=development", 'root', '1234' );
  }

  /**
   * Получить из бд все значения таблицы users
   *
   * @return PDOStatement
   */
  public function loadAll()
  {
    $sql = 'SELECT * FROM users';
    $rows = $this->connection->query( $sql );

    return $rows;
  }

  /**
   * Получить из бд определенного юзера по его id
   *
   * @param $id
   *
   * @return mixed
   */
  public function loadById( $id )
  {
    $sql = 'SELECT * FROM users WHERE user_id = ' . (int) $id;
    $result = $this->connection->query( $sql );

    return $result->fetch();
  }
}