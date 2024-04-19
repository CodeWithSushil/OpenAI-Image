<?php
namespace App\Models;

class User
{
  private $name;
  private $username;
  private $email;
  private $password;
  private $user_ip;
  private $user_system;
  private $table;

  public function signup()
  {
    echo "<pre>";
    print_r($_POST);
  }

  public function login()
  {
    echo "hi";
    echo "<pre>";
    print_r($_POST);
  }
}
