<?php pageAdd("include/header.php"); ?>
<section style="height:100vh;" class="section is-flex is-justify-content-center is-align-items-center">
<div class="container">   <div class="columns is-vcentered is-centered">
<div class="column is-6-desktop is-8-tablet">
<div class="card">
<div class="card-content">
<p class="title is-size-5-mobile has-text-centered is-uppercase has-text-link">Forget Password</p>
<div class="content">
<form method="POST" action="/submit-forget">
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" name="email" placeholder="Email" required />
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>
<div class="field is-grouped is-flex is-justify-content-space-between is-align-items-center">
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
