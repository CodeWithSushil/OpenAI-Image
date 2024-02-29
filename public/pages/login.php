<?php pageAdd("include/header.php"); ?>
<div class="form">
<h2>Login page</h2>
<form action="/submit-login" method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<div class="btn-grp" >
<input type="submit" name="login" value="Login">
<a class="btn" href="register">Signup</a>
</div>
</form>
</div>
<?php pageAdd("include/footer.php");?>
