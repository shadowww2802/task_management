<?php
session_start();
include('../dbconfig.php');
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $sql = 'SELECT task_title, description, priority, due_date
    FROM tasks';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error occurred:" . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manage System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>

    <section class="vh-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10">
                    <div class="card mask-custom">
                        <div class="card-body p-4">
                            <div class="text-center text-light pt-3 pb-4">
                                <img src="../img/check1.webp" alt="Check" width="60">
                                <h2 class="my-4">Task List</h2>
                                <a href="create_task.php">
                                    <button type="button" class="btn btn-primary">Add Task</button>
                                </a>
                            </div>
                            <table class="table table-striped table-dark text-white mb-4">
                                <thead class="table-light">
                                    <tr>
                                        <!-- <th scope="col">Name</th> -->
                                        <th scope="col">Task</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r = $q->fetch()) : ?>
                                        <tr class="fw-normal">
                                            <!-- <th>
                                                <img src="../img/ava5-bg.webp" alt="avatar 1" style="width: 45px; height: auto;">
                                                <?php echo $r['first_name'] ?>
                                            </th> -->
                                            <td class="align-middle">
                                                <?php echo $r['task_title'] ?>
                                            </td>
                                            <td class="align-middle">
                                                <?php echo $r['description'] ?>
                                            </td>
                                            <td class="align-middle">
                                                <!-- <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6> -->
                                                <?php echo $r['priority'] ?>
                                            </td>
                                            <td class="align-middle">
                                                <?php echo $r['due_date'] ?>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-solid fa-pen fa-lg text-success me-3" style="color: #74C0FC;"></i></a>
                                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>