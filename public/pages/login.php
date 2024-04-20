<?php 
pageAdd("include/header.php");
$email = "";
$password = "";
if(isset($_SESSION['email']) && isset($_SESSION['password'])){
  $email=$_SESSION['email'];
  $password=$_SESSION['password'];
}
?>
<section style="height:100vh;" class="section is-flex is-justify-content-center is-align-items-center">
  <div class="container">
    <div class="columns is-vcentered is-centered">
      <div class="column is-6-desktop is-8-tablet">
        <div class="card">
          <div class="card-content">
            <p class="title has-text-centered is-uppercase has-text-link">Login Page</p>
            <div class="content">
              <form method="POST" action="/submit-login">
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" name="email" placeholder="Email" value="<?php echo $email;?>" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control has-icons-left">
                  <input class="input" type="password" name="password" placeholder="Password" value="<?php echo $password;?>" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <div class="control">
                    <label class="checkbox">
                      <input type="checkbox" name="remember"/> Remember me
                    </label>
                  </div>
                </div>
                <div class="field is-grouped is-flex is-justify-content-space-between is-align-items-center">
                  <p class="control">
                    <button class="button is-link" type="submit" name="submit">Login</button>
                  </p>
                  <p class="control">
                    <a class="button is-dark" href="/register">Register</a>
                  </p>
                </div>
<div class="field">
<div class="control has-text-centered">
<a style="width:100%;" class="is-primary has-text-white button" href="/forget-password">Forget Password</a>
</div>
</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php pageAdd("include/footer.php");?>
