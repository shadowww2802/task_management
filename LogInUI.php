<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100" style="background-color: #4b4df7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">

              <!-- Side image -->
              <div class="col-md-6 col-lg-5 d-none d-md-block align-self-center">
                <img src="../task_management/img/Login.jpg" alt="Login Image" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>

              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="process.php" method="post">
                    <div class="d-flex align-items-center mb-3 pb-1 mt-3">
                      <span class="h1 fw-bold mb-0">Welcome!</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Email address</label>
                      <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="user_password" required />
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-primary btn-lg btn-block w-100" type="submit" name="loginButton">Login</button>
                    </div>

                    <!-- Navigation to RegistrationUI -->
                    <p class="mb-5 pb-lg-2" style="color: black;">Don't have an account yet?
                      <a href="RegistrationUI.php" style="color: #393f81;">Register here</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>