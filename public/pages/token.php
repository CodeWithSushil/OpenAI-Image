<?php pageAdd("include/header.php"); ?>

<section style="height: 100vh" class="section is-flex is-justify-content-center is-align-items-center">
  <div class="container">
    <div class="columns is-vcentered is-centered">
      <div class="column is-6-desktop is-8-tablet">
        <div class="card">
          <div class="card-content">
            <p class="title has-text-centered is-uppercase has-text-link">API Token</p>
              <div class="content">
                <form method="POST" action="/submit-login">
                  <div class="field">
                    <p class="control has-icons-left has-icons-right">
                      <input class="input" type="text" placeholder="API Token" required />
                      <span class="icon is-small is-left">
                        <i class="fas fa-envelope" ></i>
                      </span>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <button class="button is-link">Submit</button>
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
