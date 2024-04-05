<?php pageAdd("include/header.php"); ?>

        <section style="height:100vh;" class="section is-flex is-justify-content-center is-align-items-center">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-content">
                                <p class="title has-text-centered is-uppercase has-text-link">Login Page</p>
                                <div class="content">
                                    <form method="POST" action="/submit-login">
                                        <div class="field">
                                            <p
                                                class="control has-icons-left has-icons-right"
                                            >
                                                <input
                                                    class="input"
                                                    type="email"
                                                    placeholder="Email"
                                                />
                                                <span
                                                    class="icon is-small is-left"
                                                >
                                                    <i
                                                        class="fas fa-envelope"
                                                    ></i>
                                                </span>

                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control has-icons-left">
                                                <input
                                                    class="input"
                                                    type="password"
                                                    placeholder="Password"
                                                />
                                                <span
                                                    class="icon is-small is-left"
                                                >
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            </p>
                                        </div>

                                        <div class="field">
                                            <div class="control">
                                                <label class="checkbox">
                                                    <input type="checkbox" />
                                                  Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="field is-grouped">
                                            <p class="control">
                                                <button class="button is-link">
                                                    Login
                                                </button>
                                            </p>
                                            <p class="control">
                                                <button
                                                    class="button is-primary"
                                                >
                                                    Register
                                                </button>
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
