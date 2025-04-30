<!DOCTYPE html>
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
                    <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Task</button>
                    <button type="button" class=" btn btn-light"><span ><i data-feather="printer" style="width:18px; height:18px; margin-right:8px;"></i></span>Print</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
                        <tr>
                        <th scope="row">1</th>
                        <td class="col-sm-8 col-md-10">do the task</td>
                        <td>
                            <a href="javascript:;" class="text-primary me-2"><i data-feather="edit"></i></a>
                            <a href="javascript:;" class="text-danger"><i data-feather="trash-2"></i></a>
                        </td>
                        </tr>
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