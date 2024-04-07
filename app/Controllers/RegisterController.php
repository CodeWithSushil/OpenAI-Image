<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController{
  public function index(){
    view("pages.register");
  }
  
  public function login(){

    $obj = new User();

    $obj->email = $_POST["email"];
    $obj->password = $_POST["password"];

    if ($obj->login()) {
      $_SESSION["user"] = $obj->username;
      redirect("dashboard");
    } else {
      echo "User unable to login.";
    }
  }
}
