<!-- This is the edit form to change data in the database -->
<?php
if(!isset($_GET['ClassID'])){
    die ("classid not provided");
}
require_once('test.php');
$classid = $_GET['ClassID'];
$sql = "SELECT * FROM class WHERE ClassID = $classid";
$result = $con->query($sql);
$data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Site</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<body class="bg-dark">

<div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Edit Class</h2>
                    </div>
                    <div class="card-body">
                        
                    <form action="Classupdate.php?ClassID=<?= $classid ?>" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="ClassID">ClassID</label>
                                <input type="number" name="cid" class="form-control" placeholder="classID" value="<?=$data['ClassID'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="TeacherID">TeacherID</label>
                                <input type="number" name="tid" class="form-control" placeholder="TeacherID" value="<?=$data['TeacherID'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="Name">Class Name</label>
                                <input type="text" name="cname" class="form-control" placeholder="class name" value="<?=$data['ClassName'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="Capacity">Capacity</label>
                                <input type="number" name="capacity" class="form-control" placeholder="capacity" value="<?=$data['ClassCapacity'] ?>" required>
                            </div>
                            <div class="form-group"><br>
                                <input type="submit" name="Classsubmit" value="Submit" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>