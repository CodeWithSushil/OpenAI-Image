<?php
namespace App\Middleware;
use App\Helper\Helper;

class Auth
{
  public function handle()
  {
    if (!isset($_SESSION["user"]))
    {
      redirect("login");
      exit();
    }
  }
}
