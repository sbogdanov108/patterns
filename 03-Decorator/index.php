<?php

/**
 * Class PrettyPrint
 *
 * Класс паттерна выводит данные в определенном формате
 */
class PrettyPrint
{
  protected $book = null;

  public function __construct( $book_object )
  {
    $this->book = $book_object;
  }

  /**
   * Получить и оформить определенным образом автора
   *
   * @return string
   */
  public function getAuthor()
  {
    return $this->book->author_first_name . " " . $this->book->author_last_name;
  }

  /**
   * Второй вариант вывода информации об авторе
   *
   * @return string
   */
  public function getAuthorSortable()
  {
    return $this->book->author_last_name . ", " . $this->book->author_first_name;
  }
}

$book = new stdClass();
$book->title = "Patterns of Enterprise Application Architecture";
$book->author_first_name = "Martin";
$book->author_last_name = "Fowler";

/*
 Обернув объект декоратором, мы можем получить данные в определенном формате, и при необходимости изменить формат вывода данных, это можно будет произвести в одном месте - в классе декоратора
 */
$bookFormatter = new PrettyPrint( $book );
echo $book->title . " is a book written by " . $bookFormatter->getAuthor() . "\n";

echo "But you will find the book under " . $bookFormatter->getAuthorSortable() . "\n";