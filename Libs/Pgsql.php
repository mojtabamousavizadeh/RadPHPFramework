<?php

/**
 * Created by PhpStorm.
 * User: Ahmad
 * Date: 08/02/2016
 * Time: 03:16 AM
 */
namespace Libs;
//define('DB_TYPE','mysql');
//define('DB_HOST','localhost');
//define('DB_NAME','gps_databackup');
//define('DB_USER','root');
//define('DB_PASS','');




use PDO;
// define('DB_TYPE2','pgsql');
// define('DB_HOST2','localhost');
// define('DB_NAME2','db_gis_traffic');
// define('DB_USER2','postgres');
// define('DB_PASS2','1234');

class Pgsql extends PDO
{

      function __construct()
    {
//        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
       parent::__construct(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
      //  parent::__construct(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);
    }


    /**
     * select
     * @param string $sql An SQL string
     * @param array $array Paramters to bind
     * @param constant $fetchMode A PDO Fetch mode
     * @return mixed
     */
    static public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
       $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
      //  $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);
        $sth = $db->prepare($sql);
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
  static  public function insert($table, $data)
    {
        $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
    //    $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);

        try {
            ksort($data);

            $fieldNames = implode(', ', array_keys($data));
            $fieldValues = ':' . implode(',:', array_keys($data));

            $sth = $db->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");

            foreach ($data as $key => $value) {
                $sth->bindValue(":$key", $value);
            }

            $sth->execute();

            return 'Successful';

        }
        catch
        (MyException $e) {
            return null;
        }
    }


    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    static public function insert_where ($table, $data,$where)
    {
        $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
//           $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);

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
   static public function update($table, $data, $where)
    {
        $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
//        $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);
        try {
        ksort($data);

        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "$key=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = $db->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();

            return 'Successful';
        }
        catch
        (MyException $e) {
            return null;
        }

    }

    /**
     * delete
     *
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer Affected Rows
     */
    static public function delete($table, $where, $limit = 1)
    {
        $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
  //      $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);

        try {
        $db->exec("DELETE FROM $table WHERE $where LIMIT $limit");
            return 'Successful';
        }
        catch (MyException $e) {
            return null;
        }
    }

   static public function update_new($table, $info, $where, $bind="") {
       $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);
//       $db = new  PDO(DB_TYPE.':host='.DB_HOST.';port=5433;dbname='.DB_NAME,DB_USER,DB_PASS);

       $fields = $db->filter($table, $info);
        $fieldSize = sizeof($fields);

        $sql = "UPDATE " . $table . " SET ";
        for($f = 0; $f < $fieldSize; ++$f) {
            if($f > 0)
                $sql .= ", ";
            $sql .= $fields[$f] . " = :update_" . $fields[$f];
        }
        $sql .= " WHERE " . $where . ";";

        $bind = $db->cleanup($bind);
        foreach($fields as $field)
            $bind[":update_$field"] = $info[$field];

        return $db->run($sql, $bind);
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

        if(false !== ($list = $db->run($sql))) {
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


    public static  function INSERTS($query)
    {
        $db = new  PDO(DB_TYPE2.':host='.DB_HOST2.';port=5432;dbname='.DB_NAME2,DB_USER2,DB_PASS2);

        try {


            $sth = $db->prepare($query);
            $sth->execute();
            return $db->lastInsertId();

        }
        catch
        (PDOException $e) {
            return false;
        }

    }




}
