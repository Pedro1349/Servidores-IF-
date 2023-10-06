<?php

class Errors{
    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn=$connection;
    }

    public function save($errorMessage,$errorType)
    {
        $this->conn->exec("INSERT INTO errors(errorType,errorMessage) VALUES ('".$errorType. "','".$errorMessage."')");
    }

    public function delete($errorId){
        $this->conn->exec("DELETE FROM errors WHERE id = '" .$errorId."'   ");
    }

    public function all(){
        $data =$this->conn->query("SELECT * FROM errors");
        return $data->fetchArray();
    }

    public function findError($errorType){
        
        $data =$this->conn->query("SELECT * FROM errors WHERE errorType like '%" . $errorType . "%' ");
        return $data->fetchArray();
    }
}