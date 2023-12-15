<!-- This is the edit form to change data in the database -->
<?php
if(!isset($_GET['TeacherID'])){
    die ("teacherid not provided");
}
require_once('test.php');
$teacherid = $_GET['TeacherID'];
$sql = "SELECT * FROM teacher WHERE TeacherID = $teacherid";
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
                        <h2 class="display-6 text-center">Edit Teacher</h2>
                    </div>
                    <div class="card-body">
                        
                    <form action="Teacherupdate.php?TeacherID=<?= $teacherid ?>" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="TeacherID">TeacherID</label>
                                <input type="number" name="tid" class="form-control" placeholder="TeacherID" value="<?=$data['TeacherID'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="Name">Name</label>
                                <input type="text" name="tname" class="form-control" placeholder="Name" value="<?=$data['TeacherName'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" value="<?=$data['TeacherAddress'] ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="PhoneNumber">Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?=$data['TeacherPhoneNumber'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Background Check">BackgroundCheck</label>
                                <input type="text" name="background" class="form-control" placeholder="Background" value="<?=$data['BackgroundCheck'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Salary">Salary</label>
                                <input type="number" name="salary" class="form-control" placeholder="Salary" value="<?=$data['TeacherSalary'] ?>" required>
                            </div>
                            <div class="form-group"><br>
                                <input type="submit" name="Teachersubmit" value="Submit" class="btn btn-primary btn-block">
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