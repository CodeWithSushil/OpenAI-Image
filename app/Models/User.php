<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class User extends Database
{
  public $name;
  public $username;
  public $email;
  public $password;
  public $user_ip;
  public $user_system;
  public $table = "users";

  public function register() {
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

      $query = "SELECT * FROM $this->table WHERE username=:username AND email= :email";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(":username", $this->username);
      $stmt->bindParam(":email", $this->email);
      $stmt->execute();
      
      if ($stmt->rowCount() > 0) {
        return false;
      } else {
        $sql = "INSERT INTO $this->table (name,username, email, password, user_ip, user_system, create_at) VALUES (:name, :username, :email, :password, :user_ip, :user_system, current_timestamp())";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(":user_ip", $this->user_ip);
        $stmt->bindParam(":user_system", $this->user_system);
        
        if ($stmt->execute()) {
          return true;
        } else {
          return false;
        }
      }
    }
  }
  
  public function login() {
   
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
      
      $sql = "SELECT * FROM $this->table WHERE `email`=:email";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(":email", $this->email);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if ($row && password_verify($this->password, $row["password"])) {
        $this->username = $row["username"];
        return true;
      } else {
        return false;
      }
    }
  }

  public function forget(){
    $sql = "SELECT * FROM $this->table WHERE `email`=:email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $this->email);
    $stmt->execute();
    $stmt->rowCount() > 0;
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(isset($row['user_ip']) == $_SERVER['REMOTE_ADDR'] || isset($row['user_system']) === $_SERVER['HTTP_USER_AGENT']){
      $_SESSION['email']=$this->email;
      return true;
    } else {
      return false;
    }
  }

  public function setPassword()
  {
    if(!isset($_POST['email'])){
      return false;
    } else {
      date_default_timezone_set("asia/kolkata");
      $dateTime = date("Y-m-d H:i:s");
      
      $sql = "UPDATE $this->table SET password=:password, user_ip=:user_ip, user_system=:user_system, update_at='$dateTime' WHERE email=:email;";
      
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':email', $this->email);
      $this->password = password_hash($this->password, PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $this->password);
      $stmt->bindParam(':user_ip', $this->user_ip);
      $stmt->bindParam(':user_system', $this->user_system);
      //$stmt->bindParam(":update_time", $dateTim);
      
      if($stmt->execute()){
        return true;
      } else {
        return false;
      }
    }
  }
}
