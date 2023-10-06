<?php
class User{
    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn=$connection;
    }

    public function save($sql){
        $this->conn->exec($sql);
    }

    public function delete($sql){
        $this->conn->exec($sql);
    }
    
    public function find($sql){
        $find=$this->conn->query($sql);
        return $find->fetchArray();
    }
    
    public function all(){
        return $users=$this->conn->query("SELECT * FROM user");
    }

    //módulo específico para registrar no sistema
    public function register($course,$lastname,$firstname,$email,$password){
        
        $this->conn->exec("INSERT INTO user (course,firstname,lastname,email,password) VALUES ('".$course."','".$firstname."','".$lastname."','".$email."','".password_hash($password,PASSWORD_DEFAULT)."')");;
    }

    public function update($about,$telephone,$address,$country,$work,$city,$course,$lastname,$firstname,$email){
        $userID = Auth::userId();

        $this->conn->exec("UPDATE user SET 
            telephone = '{$telephone}',
            address = '{$address}',
            country = '{$country}',
            work = '{$work}',
            city = '{$city}',
            course = '{$course}',
            lastname = '{$lastname}',
            firstname = '{$firstname}',
            email = '{$email}',
            about = '{$about}'
            WHERE id = '{$userID}'
         "); 
    }
    public function deletar() {
        $userID = Auth::userId();

        $this->conn->exec("DELETE FROM User
        WHERE  id =" . $userID);
    }


}