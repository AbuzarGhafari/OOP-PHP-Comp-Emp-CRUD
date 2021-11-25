<?php

include_once 'Model.php';
include_once 'Company.php';

class Employee extends Model
{
    protected static function table()
    {
        return parent::$table = 'employee';
    }

    public static function company($id)
    {
        $company = Company::findFirst($id);
        return $company['name'];
    }
}