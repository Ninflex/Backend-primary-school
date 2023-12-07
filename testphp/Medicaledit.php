<!-- This is the edit form to change data in the database -->
<?php
if(!isset($_GET['MedicalID'])){
    die ("medicalid not provided");
}
require_once('test.php');
$medicalid = $_GET['MedicalID'];
$sql = "SELECT * FROM medical WHERE MedicalID = $medicalid";
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
                        <h2 class="display-6 text-center">Edit Medical info</h2>
                    </div>
                    <div class="card-body">
                        
                    <form action="Medicalupdate.php?MedicalID=<?= $medicalid ?>" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="MeadicalID">MedicalID</label>
                                <input type="number" name="mid" class="form-control" placeholder="MedicalID" value="<?=$data['MedicalID'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="medinfo">Medical info</label>
                                <input type="text" name="medinfo"  class="form-control" placeholder="Medical info" value="<?=$data['MedicalInfo'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="Alergies">Alergies</label>
                                <input type="text" name="alergies"  class="form-control" placeholder="Alergies" value="<?=$data['Alergies'] ?>" required>
                            </div>
                            <div class="form-group"><br>
                                <input type="submit" name="Medicalsubmit" value="Submit" class="btn btn-primary btn-block">
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