<?php

include_once 'Model.php';

class Company extends Model
{
    protected static function table()
    {
        return parent::$table = 'company';
    }

    public static function employees($companyid)
    {
        $sql = "Select * FROM employee WHERE company_id = ?;";
        return DB::getInstance()->prepare($sql, [$companyid])->getAll();
    }
}