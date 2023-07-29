<?php

namespace Core\model;

use mysqli;

abstract class BaseModel
{
    private object $mysqli;
    private string $sql = '';

    public function __construct()
    {
        $this->mysqli = new mysqli();
        $this->mysqli->real_connect('db', 'root', 'root', 'framework_db', '3306');
        //$this->mysqli = new \PDO('')
    }

    public function select($fields = '')
    {
        $this->sql = "SELECT $fields ";
        return $this;
    }

    public function fromTable($table = '')
    {
        $this->sql .= "FROM $table ";
        return $this;
    }

    /**
     * @param string $field asd
     * @param string $operator dsa
     * @param string $value asda
     * @return $this
     */
    public function where(string $field,string $operator,string $value)
    {
        $this->sql .= 'WHERE ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    public function prepareQueryData($query)
    {
        $result = [];
        foreach ($query as $item)
        {
            $result[] = $item;
        }
        return $result;
    }

    public function get()
    {
        $this->mysqli->real_query($this->sql);

        return $this->prepareQueryData($this->mysqli->use_result());
    }

}