<nav class="navbar has-shadow">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="public/assets/images/logo.png" alt="Open-AI" width="28" height="28">
    </a>
    <div class="navbar-burger has-text-black" data-target="navbar">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="navbar" class="navbar-menu has-text-centered">
    <div class="navbar-end">
      <a class="navbar-item" href="/">Home</a>
      <a class="navbar-item" href="#">About</a>
      <a class="navbar-item" href="#">Services</a>
<?php
if(isset($_SESSION['username'])) {
  if($_SERVER['REQUEST_URI'] == "/dashboard"){ ?>
    <a class="navbar-item" href="/logout">Logout</a>
<?php } else { ?>
    <a class="navbar-item" href="/dashboard">Dashboard</a>
<?php
  } } else { ?>
  <a class="navbar-item" href="/login">Login</a>
<?php } ?>
    </div>
  </div>
</nav>
