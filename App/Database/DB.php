<?php

class DB
{
    protected $connection;
    protected $query;

    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'com_emp';
    private static $instance = null;

    private function __construct()
    {
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        $this->connection = new PDO($dsn, $this->dbuser, $this->dbpass);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this;
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function query($sql)
    {
        $this->query = $this->connection->query($sql);
        return $this;
    }

    public function getAll()
    {
        return $this->query->fetchAll();
    }

    public function get()
    {
        return $this->query->fetch();
    }

    public function prepare($sql, $params)
    {
        $this->query = $this->connection->prepare($sql);
        $this->query->execute($params);
        return $this;
    }

}