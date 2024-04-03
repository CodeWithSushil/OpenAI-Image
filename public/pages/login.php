<?php pageAdd("include/header.php"); ?>

<div class="container m-5">
  <div class="is-mobile">
  <h2 class="is-size-4 is-uppercase has-text-centered has-text-link mb-6">Login Page</h2>
    <form method="POST" action="submit-login">
      <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input" type="email" name="email" placeholder="Email" required>
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
        </div>
      </div>
      <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input" type="password" name="password" placeholder="Password" required>
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" type="submit" name="submit">Login</button>
        </div>
        <div class="control">
<a class="button is-link is-light" href="/register">Register</a>
        </div>
      </div>
    </form>
  </div>
</div>

<?php pageAdd("include/footer.php");?>
