<?php pageAdd("include/header.php"); ?>
<section class="section">
  <div class="container">
    <div class="columns vcentered">
      <div class="column">
        <div class="card">
          <div class="card-content">
            <p class="title has-text-centered is-uppercase has-text-link">Login Page</p>
            <div class="content">
              <form method="POST" action="/submit-login">
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" name="email" placeholder="Email" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control has-icons-left">
                    <input class="input" type="password" name="password" placeholder="Password" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <div class="control">
                    <label class="checkbox">
                      <input type="checkbox" /> Remember me
                    </label>
                  </div>
                </div>
                <div class="field is-grouped">
                  <p class="control">
                    <button class="button is-link" type="submit" name="submit">Login</button>
                  </p>
                  <p class="control">
                    <a class="button is-dark" href="/register">Register</a>
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

<?php pageAdd("include/footer.php");?>
