<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #4b4df7;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;" >
                <div class="card-body p-md-5">
                    <div class="row justify-content-center" style="margin-left: 10px">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 mt-3">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create Account</p>

                        <form class="mx-1 mx-md-4">

                        <!-- First, Middle, and Last Name Textfield -->
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill">
                            <label class="form-label" for="form3Example1c">First Name</label>
                                <input type="text" id="form3Example1c" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill">
                            <label class="form-label" for="form3Example1c">Middle Name</label>
                                <input type="text" id="form3Example1c" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill">
                            <label class="form-label" for="form3Example1c">Last Name</label>
                                <input type="text" id="form3Example1c" class="form-control" />
                            </div>
                        </div>

                        <!-- Email and Password Textfield -->
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill">
                                <label class="form-label" for="form3Example3c">Email</label>
                                <input type="email" id="form3Example3c" class="form-control" />
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill">
                                <label class="form-label" for="form3Example4c">Password</label>
                                <input type="password" id="form3Example4c" class="form-control" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="button" class="btn btn-primary btn-lg w-100 mt-3">Register</button>
                        </div>

                        <p class="mb-5 pb-lg-2 mt-5" style="color: #393f81;">Already have an Account?
                        <a href="LoginUI.php" style="color: #393f81;">Login here</a></p>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                        <img src="../task_management/img/Registration.png" alt="Registration Image" class="img-fluid" />
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