<?php
session_start();
include('../dbconfig.php');
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $sql = 'SELECT task_title, description, priority, due_date FROM tasks';
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
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
    <style>
        .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10">
                    <div class="card mask-custom" style="height: 50em;">
                        <div class="card-body p-4">
                            <div class="text-center text-light pt-3 pb-4">
                                <img src="../img/check1.webp" alt="Check" width="100">
                                <h2 class="m-3">Task <b>Management</b></h2>
                            </div>
                            <table class="table table-bordered mb-4">
                                <thead class="table-primary">
                                    <tr>
                                        <!-- <th scope="col">Name</th> -->
                                        <th scope="col" style="text-align: center;">Task</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" style="text-align: center;">Priority</th>
                                        <th scope="col" style="text-align: center;">Due Date</th>
                                        <th scope="col"> </th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r = $q->fetch()) : ?>
                                        <tr class="fw-normal">
                                            <!-- <th>
                                                <img src="../img/ava5-bg.webp" alt="avatar 1" style="width: 45px; height: auto;">
                                                <?php echo $r['first_name'] ?>
                                            </th> -->
                                            <td style="width: 10em; text-align: center;">
                                                <?php echo $r['task_title'] ?>
                                            </td>
                                            <td>
                                                <?php echo $r['description'] ?>
                                            </td>
                                            <td style="width: 8em; text-align: center; <?php
                                                switch ($r['priority']) {
                                                    case 'High':
                                                        echo 'color: red;';
                                                        break;
                                                    case 'Medium':
                                                        echo 'color: yellow;';
                                                        break;
                                                    case 'Low':
                                                        echo 'color: green;';
                                                        break;
                                                    default:
                                                        echo 'color: black;';
                                                        break;
                                                }
                                            ?>">
                                                <!-- <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6> -->
                                                <?php echo $r['priority'] ?>
                                            </td>
                                            <td style="width: 8em; text-align: center;">
                                                <?php echo $r['due_date'] ?>
                                            </td>
                                            <td class="text-center" style="width: 8em;">
                                                <a href="edit_task.php" data-mdb-toggle="tooltip" title="Edit"><i class="fas fa-solid fa-pen fa-lg text-success me-4"></i></a>
                                                <a href="delete_task.php" data-mdb-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- "Add Task" button placed at the bottom of the card -->
                        <div class="card-footer p-4">
                            <div class="text-center">
                                <a href="create_task.php">
                                    <button type="button" class="btn btn-primary" style="width: 100%;">Add Task</button>
                                </a>
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
