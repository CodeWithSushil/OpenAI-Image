<?php pageAdd("include/header.php"); ?>
<div class="form">
<h2>Login page</h2>
<form action="/submit-login" method="POST">
<input class="input" type="email" name="email" placeholder="Email" required>
<input class="input" type="password" name="password" placeholder="Password" required>
<div class="btn-grp" >
<input class="button is-success" type="submit" name="login" value="Login">
<a class="btn" href="register">Signup</a>
</div>
</form>
</div>
<?php pageAdd("include/footer.php");?>
