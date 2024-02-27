<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #4b4df7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">

                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="../process.php" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1 mt-3">
                                            <span class="h1 fw-bold mb-0">Edit Task</span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Task Title</label>
                                            <input type="text" id="form2Example17" class="form-control form-control-lg" name="task_title" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Task Description</label>
                                            <textarea id="form2Example17" class="form-control form-control-lg align-bottom" name="description" style="height: 150px;" required></textarea>
                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <label class="form-label" for="form2Example17">Set Priority Level</label>
                                                <select class="form-select form-select-lg mb-3" name="priority" aria-label="Large select example">
                                                    <option disabled selected>Not Stated</option>
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="form2Example17">Due Date <i>(YYYY/MM/DD)</i></label>
                                                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="due_date" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-5 row">
                                            <div class="col-md-6 mb-2">
                                                <button class="btn btn-primary btn-lg btn-block w-100" type="submit" name="createTaskButton">Edit</button>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="view_task.php">
                                                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block w-100">Cancel</button>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- Side image -->
                            <div class="col-md-6 col-lg-5 d-none d-md-block align-self-center">
                                <img src="../img/Edit.png" alt="Login Image" class="img-fluid" style="margin-right: 1em;" />
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