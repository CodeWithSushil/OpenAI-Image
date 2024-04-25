<?php
namespace App\Controllers;

class DashboardController
{
  public function index()
  {
    view("pages.dashboard");
  }

  public function logout()
  {
    $_SESSION = [];
    session_destroy();
    redirect("login");
  }
}
