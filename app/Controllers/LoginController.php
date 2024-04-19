<?php
namespace App\Controllers;
use App\Models\User;

class LoginController{
  public function index(){
    view("pages.login");
  }
  
  public function login(){
    $obj = new User();
    echo "<pre>";
    print_r($obj->login());

    $obj->email = "heloo";// $_POST["email"];
   // $obj->password = $_POST["password"];
    
    if ($obj->login()) {
      $_SESSION["user"] = $obj->username;
      redirect("dashboard");
    } else {
      echo "User unable to login.";
    }
  }
}
