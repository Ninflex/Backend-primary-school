<!-- This is the edit form to change data in the database -->
<?php
if(!isset($_GET['PupilID'])){
    die ("pupilid not provided");
}
require_once('test.php');
$pupilid = $_GET['PupilID'];
$sql = "SELECT * FROM pupil WHERE PupilID = $pupilid";
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
                        <h2 class="display-6 text-center">Edit Student</h2>
                    </div>
                    <div class="card-body">
                        
                    <form action="Pupilupdate.php?PupilID=<?= $pupilid ?>" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="PupilID">PupilID</label>
                                <input type="number" name="puid" class="form-control" placeholder="PupilID" value="<?=$data['PupilID'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="Name">Name</label>
                                <input type="text" pattern="[A-Za-z]+" name="pname" class="form-control" placeholder="Name" value="<?=$data['PupilName'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="grade">Select Grade</label>
                                <select class="form-control" name="pgrade" required>
                                <option></option>
                                <option>Reception</option>
                                <option>1st</option>
                                <option>2nd</option>
                                <option>3rd</option>
                                <option>4th</option>
                                <option>5th</option>
                                <option>6th</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" min="2011-12-31" max="2023-12-31" name="pdob" class="form-control" value="<?=$data['DateOfBirth'] ?>" required>
                            </div>
                            <div class="form-group"><br>
                                <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block">
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