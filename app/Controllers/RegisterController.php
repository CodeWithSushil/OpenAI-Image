<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController{
  public function index(){
    view("pages.register");
  }
  
  public function register(){
    
    $user = new User();
    $user->name = $_POST["name"];
    $user->username = $_POST["username"];
    $user->email = $_POST["email"];
    $user->password = $_POST["password"];
    $user->user_ip = $_SERVER['REMOTE_ADDR'];
    $user->user_system = $_SERVER['HTTP_USER_AGENT'];

    if ($user->register()) {
      $_SESSION["username"] = $user->username;
      redirect("login");
    } else {
      echo "User unable to register.";
    }
  }
}
