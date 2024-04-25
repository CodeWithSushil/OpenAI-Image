<?php
namespace App\Controllers;
use App\Models\User;

class NewpswController
{
  public function index()
  {
    view("pages.npassword");
  }
  
  public function newpassword()
  {
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']))
    {
      $user = new User();
      $user->email = $_POST['email'];
      $user->password = $_POST['password'];
      $user->user_ip = $_SERVER['REMOTE_ADDR'];
      $user->user_system = $_SERVER['HTTP_USER_AGENT'];

      if($user->setPassword()){
        redirect("login");
      } else{
        echo "Something wrong.";
      }
    } else {
      echo "Bad Request.";
    }
  }
}
