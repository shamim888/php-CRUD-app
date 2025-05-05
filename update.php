<!DOCTYPE html>

<?php 

include 'db.php';

$id = $_GET['id'];

$sql = "select * from tasks where id='$id' ";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

// var_dump($row);

if(isset($_POST['submit'])){

    $task = $_POST['task'];
    
    $sql2 = "update tasks set name ='$task' where id ='$id'";
    
    $db->query($sql2);
    
    header('location: index.php');

}


?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./notepad.png">
    <title>To Do List - Update</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container py-4">
        <div class="row">
            <h2 class="text-primary text-center fs-3 fw-bold py-5">A Easy Todo List</h2>
            <form class="" method="post">
                <div class="">
                    <h1 class="fs-5 pb-4 text-center" id="exampleModalLabel">Update Task</h1>
                </div>
                <div class="">
                    <div class="mb-3">
                        <label for="task" class="form-label">Task Name</label>
                        <input type="text" id="task" name="task" aria-describedby="taskHelp" value="<?php echo $row['name']; ?>" class="form-control">
                        <div id="taskHelp" class="form-text">Update your tasks here</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" name="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/feather.min.js"></script>
<script>
  feather.replace();
</script>
</body>
</html>