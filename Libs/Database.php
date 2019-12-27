<?php

/**
 * Created by PhpStorm.
 * User: Ahmad
 * Date: 08/02/2016
 * Time: 03:16 AM
 */

namespace Libs;
use PDO;
class Database extends PDO
{

    function __construct()
    {
        //parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }


    /**
     * select
     * @param string $sql An SQL string
     * @param array $array Paramters to bind
     * @param constant $fetchMode A PDO Fetch mode
     * @return mixed
     */
    public static  function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $dbh = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        $sth = $dbh->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    public static   function insert($table, $data)
    {

        $db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        ksort($data);
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $db->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }


    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    public static function insert_where ($table, $data,$where)
    {
        $db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $db->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues) where $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }



    /**
     * update
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @param string $where the WHERE query part
     */
    public static function update($table, $data, $where)
    {
        $db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        ksort($data);

        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = $db->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }

    /**
     * delete
     *
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer Affected Rows
     */
    public static function delete($table, $where, $limit = 1)
    {
        $db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        return $db->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }




    public function update_new($table, $info, $where, $bind="") {
        $fields = $this->filter($table, $info);
        $fieldSize = sizeof($fields);

        $sql = "UPDATE " . $table . " SET ";
        for($f = 0; $f < $fieldSize; ++$f) {
            if($f > 0)
                $sql .= ", ";
            $sql .= $fields[$f] . " = :update_" . $fields[$f];
        }
        $sql .= " WHERE " . $where . ";";

        $bind = $this->cleanup($bind);
        foreach($fields as $field)
            $bind[":update_$field"] = $info[$field];

        return $this->run($sql, $bind);
    }

    private function filter($table, $info) {
        $driver = $this->getAttribute(PDO::ATTR_DRIVER_NAME);
        if($driver == 'sqlite') {
            $sql = "PRAGMA table_info('" . $table . "');";
            $key = "name";
        }
        elseif($driver == 'mysql') {
            $sql = "DESCRIBE " . $table . ";";
            $key = "Field";
        }
        else {
            $sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $table . "';";
            $key = "column_name";
        }

        if(false !== ($list = $this->run($sql))) {
            $fields = array();
            foreach($list as $record)
                $fields[] = $record[$key];
            return array_values(array_intersect($fields, array_keys($info)));
        }
        return array();
    }

    private function cleanup($bind) {
        if(!is_array($bind)) {
            if(!empty($bind))
                $bind = array($bind);
            else
                $bind = array();
        }
        return $bind;
    }

    public function run($sql, $bind="") {
        $this->sql = trim($sql);
        $this->bind = $this->cleanup($bind);
        $this->error = "";

        try {
            $pdostmt = $this->prepare($this->sql);
            if($pdostmt->execute($this->bind) !== false) {
                if(preg_match("/^(" . implode("|", array("select", "describe", "pragma")) . ") /i", $this->sql))
                    return $pdostmt->fetchAll(PDO::FETCH_ASSOC);
                elseif(preg_match("/^(" . implode("|", array("delete", "insert", "update")) . ") /i", $this->sql))
                    return $pdostmt->rowCount();
            }
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            $this->debug();
            return false;
        }
    }










}