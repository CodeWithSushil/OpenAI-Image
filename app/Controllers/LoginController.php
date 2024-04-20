<?php
namespace App\Controllers;
use App\Models\User;

class LoginController{
  public function index(){
    view("pages.login");
  }
  
  public function login(){
    $user = new User();
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->user_ip = $_SERVER['REMOTE_ADDR'];
    $user->user_system = $_SERVER['HTTP_USER_AGENT'];

    if(isset($_POST['remember']))
    {
      $_SESSION['email']=$_POST['email'];
      $_SESSION['password']=$_POST['password'];
    }
    else
    {
      $_SESSION['email']="";
      $_SESSION['password']="";
    }

    if($user->login()){
      $_SESSION['username']= $user->username;
      redirect("/");
    } else {
      echo "Invaild email or password.";
    }
  }
}
