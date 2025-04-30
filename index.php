<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container py-4">
            <div class="row">
                <h2 class="text-primary text-center fs-3 fw-bold py-5">A Easy Todo List</h2>
                <div class="d-flex justify-content-between align-items-center px-0 py-4">
                    <button type="button" class=" btn btn-success">Add Task</button>
                    <button type="button" class=" btn btn-light">Print</button>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Task</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>do the task</td>
                        <td>Edit Delete</td>
                        </tr>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="./js/bootstrap.min.js"></script>
</body>
</html>