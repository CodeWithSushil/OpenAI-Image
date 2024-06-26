<?php
pageAdd("include/header.php");
$email = "";
if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
}
?>
<section style="height:100vh;" class="section is-flex is-justify-content-center is-align-items-center">
  <div class="container">
    <div class="columns is-vcentered is-centered">
      <div class="column is-6-desktop is-8-tablet">
        <div class="card">
          <div class="card-content">
            <p class="title is-size-5-mobile has-text-centered is-uppercase has-text-link">New Password</p>
            <div class="content">
              <form method="POST" action="/submit-password">
<div class="field">
<p class="control">
<input class="input" name="email" type="hidden" value="<?php echo $email; ?>">
</p>
</div>
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="password" name="password" placeholder="New Password" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>
                <div class="field is-grouped">
                  <p class="control">
                    <button class="button is-link" type="submit" name="submit">Submit</button>
                  </p>
                  <p class="control">
                    <a class="button is-dark" href="/login">Login</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php pageAdd("include/footer.php"); ?>
