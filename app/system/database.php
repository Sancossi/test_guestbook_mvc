<?php
/**
 * Created by PhpStorm.
 * User: Bogoradow Vasil
 * Date: 19.02.2017
 * Time: 3:55
 * Класс для подключения к базе данных
 */

class Database
{
    private $_host = 'localhost:3306';
    private $_username = 'root';
    private $_pass = 'root';
    private $_database = 'guestbook';
    private static $instance = NULL;
    private $_connection;


    private function __clone()
    {
        // запрещаем копирование для не возможности создать два подключения к базе
    }

    /**
     * Database constructor.
     */
    private function __construct()
    {
        $this -> connection = new mysqli($this ->_host, $this->_username, $this->_pass, $this->_database); // создаем подключение

        //смотрим ошибки
        if(mysqli_connect_error())
        {
            trigger_error("Ошибка подключения к базе данных MySQL" . mysqli_connect_error(), E_USER_ERROR);
        }
    }

    /**
     *
     * @return Database|null
     */
    public static function get_instance()
    {
        // Если нет подключения
        if(!self::$instance)
        {
            self::$instance = new self(); // создаем его
        }
        return self::$instance; // возращаем
    }

    /**
     * Метод возращает поделючения к базе
     * @return mysqli экземляр подключения к базе
     */
    public function get_connection()
    {
        return $this ->_connection;
    }

}
