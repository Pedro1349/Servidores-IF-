<?php
class Comment{
    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn=$connection;
    }

    public function save($comment,$user_id){
        $this->conn->exec("INSERT INTO comments (comment,user_id) VALUES('".$comment."','".$user_id."') ");
    }

    // public function delete($sql){
    //     // $this->conn->exec($sql);
    // }
    
    public function all(){
        $id=Auth::userID();
        return $comments=$this->conn->query("SELECT * FROM comments ORDER BY id DESC");
    }

}