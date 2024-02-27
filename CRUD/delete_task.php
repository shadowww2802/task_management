<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Task Confirmation</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Task Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you certain that you want to delete this task?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete-btn">Delete</button>
                    <a href="view_task.php" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // When the page loads, immediately show the modal
        window.onload = function() {
            $(modal).modal('show');
        }

        // For demonstration, when the user clicks delete, display an alert
        var deleteBtn = document.querySelector(".delete-btn");
        deleteBtn.onclick = function() {
            alert("Task deleted!");
            $(modal).modal('hide');
        }
    </script>
</body>
</html>
