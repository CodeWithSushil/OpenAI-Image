<?php
namespace App\Models;

class User{
  private $name;
  private $email;
  private $password;

  public function signup(){
    echo "<pre>";
    print_r($_POST);
  }
}
