<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/PHPLAB/App/Database/DB.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/PHPLAB/App/Traits/Arrays.php');

abstract class Model
{
    use Arrays;

    protected static $table;

    protected abstract static function table();

    public static function all()
    {
        $sql = "Select * FROM " . static::table() . ";";
        return DB::getInstance()->query($sql)->getAll();
    }

    protected static function find($id)
    {
        $sql = "Select * FROM " . static::table() . " WHERE id = ?;";
        DB::getInstance()->prepare($sql, [$id]);
    }

    public static function findFirst($id)
    {
        self::find($id);
        return DB::getInstance()->get();
    }

    public static function findAll($id)
    {
        self::find($id);
        return DB::getInstance()->getAll();
    }

    public static function insert($params)
    {
        $sql = "INSERT INTO " . static::table() . "( " . self::getKeysStrings($params) . " )" . "VALUES ( " . self::getValuesStrings($params) . " );";
        return DB::getInstance()->prepare($sql, self::getValuesArray($params));
    }

    public static function update($id, $params)
    {
        $sql = "UPDATE " . static::table() . " SET " . self::getArrAttributes($params)  . " WHERE id=?; ";
        $values = self::getValuesArray($params);
        $values[] = $id;
        return DB::getInstance()->prepare($sql, $values);
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM  " . static::table() . "  WHERE id=?;";
        return DB::getInstance()->prepare($sql, [$id]);
    }
}
