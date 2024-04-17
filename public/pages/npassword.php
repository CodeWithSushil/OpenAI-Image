<?php pageAdd("include/header.php"); ?>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="card">
          <div class="card-content">
            <p class="title has-text-centered is-uppercase has-text-link">New Password</p>
            <div class="content">
              <form method="POST" action="/new-password">
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
