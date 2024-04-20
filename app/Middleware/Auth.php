<?php
namespace App\Middleware;
use App\Helper\Helper;

class Auth
{
  public function handle()
  {
    if (!isset($_SESSION["username"]))
    {
      redirect("login");
      exit();
    }
  }
}
