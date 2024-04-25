<?php
namespace App\Controllers;
use App\Models\User;

class forgetController
{
  public function index()
  {
    view("pages.fpassword");
  }

  public function forget() {
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
      $user = new User();
      $user->email = $_POST['email'];
      $user->user_ip = $_SERVER['REMOTE_ADDR'];
      $user->user_system = $_SERVER['HTTP_USER_AGENT'];
      
      if($user->forget()){
        redirect("new-password");
      } else {
        echo "This email not exist.";
      }
    } else {
      echo "Bad Request.";
    }
  }
}
