<?php
 // session_start();
  if(!empty($_SESSION["username_911"])){
    header('location:home');
  }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>CAFETARIA</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="assets/css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
    <img class="mb-5" src="icon/cafetaria.png" width="240" height="36" alt="">

    <div class="form-floating">
      <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
      <div class="invalid-feedback">
        Mohon masukan email yang valid.
      </div>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
      <div class="invalid-feedback">
      Mohon masukan password yang valid.
      </div>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-dark w-100 py-2" type="submit" name="submit_validate" value="abc">Login</button>
    <div class="fixed-bottom text-center mb-4">
      Copyright ©2024 CAFETARIA.TECH
    </div>
  </form>
</main>


<script>
(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

    </body>
</html>
