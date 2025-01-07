<?php

require_once(LIBS . 'MysqliDb.php');
class Db
{


    protected $db;

    public function connect()
    {

        $dataBase = new MysqliDb(HOST, USER, PASS, DBNAME);

        if ($dataBase) {


            $this->db = $dataBase;
            
            return $this->db;

        } else {

            echo "Error trying to connect to database please try";
        }
    }
}