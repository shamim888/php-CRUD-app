<!DOCTYPE html>
<?php include 'db.php';

$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);

$perPage = (isset($_GET['per-page']) && (int)($_GET['per-page']) <= 50 ? (int)$_GET['per-page'] : 5);

$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "select * from tasks limit ".$start.", ".$perPage." ";

$total = $db->query("select * from tasks")->num_rows;

$pages = ceil($total / $perPage);

// echo $pages = $total / $perPage;
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
                        <form class="modal-content" method="post" action="add.php">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="task" class="form-label">Task Name</label>
                                    <input type="text" id="task" name="task" aria-describedby="taskHelp" class="form-control">
                                    <div id="taskHelp" class="form-text">Put your tasks here</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
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
                                        <a href="update.php?id=<?php echo $row['id'] ?>" class="text-primary me-2"><i data-feather="edit"></i></a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="text-danger"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                <div class="d-flex justify-content-center">
                    <ul class="pagination">
                        <?php for($i = 1; $i <= $pages; $i++): ?>
                        <li><a href="?page=<?php echo $i ?>&per-page=<?php echo $perPage; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
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