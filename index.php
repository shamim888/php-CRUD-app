<!DOCTYPE html>
<?php include 'db.php'; 

$sql = "select * from tasks";

$rows = $db->query($sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./notepad.png">
    <title>To Do List</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container py-4">
            <div class="row">
                <h2 class="text-primary text-center fs-3 fw-bold py-5">A Easy Todo List</h2>
                <div class="d-flex justify-content-between align-items-center px-0 py-4">
                    <button type="button" class=" btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Task</button>
                    <button type="button" class=" btn btn-light"><span ><i data-feather="printer" style="width:18px; height:18px; margin-right:8px;"></i></span>Print</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="task" class="form-label">Task Name</label>
                                    <input type="text" id="task" name="task" aria-describedby="taskHelp" class="form-control">
                                    <div id="taskHelp" class="form-text">Put your tasks here</div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save</button>
                        </div>
                        </div>
                    </div>
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
                        <?php while($row = $rows->fetch_assoc()): ?>
                        <tr>

                            <!-- <?php var_dump($row); ?> -->

                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td class="col-sm-8 col-md-10"><?php echo $row['name'] ?></td>
                            <td>
                                <a href="javascript:;" class="text-primary me-2"><i data-feather="edit"></i></a>
                                <a href="javascript:;" class="text-danger"><i data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/feather.min.js"></script>
<script>
  feather.replace();
</script>
</body>
</html>