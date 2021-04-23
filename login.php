<?php include('./components/header.php') ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="./index2.html">
        <small><i>powered by</i></small><b>Kaan</b>Ersoy
      </a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <form method="post" action="action.php?action=auth" id="form">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember" checked />
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Sign In
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    const formEl = document.getElementById("form");
    const REMEMBER_TOKEN = "remember_email";
    getRememberMeValue()

    formEl.addEventListener('submit', (e) => {
      setRememberMeValue();
    })

    function getRememberMeValue() {
      const emailEl = document.getElementById('email');
      if (window.localStorage.getItem(REMEMBER_TOKEN)) {
        return emailEl.value = window.localStorage.getItem(REMEMBER_TOKEN);
      }
    }

    function setRememberMeValue() {
      if (formEl.elements.remember.checked) {
        window.localStorage.setItem(REMEMBER_TOKEN, formEl.elements.email.value)
      }
    }
  </script>