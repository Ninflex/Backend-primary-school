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
                        <h2 class="display-6 text-center">Add Teacher</h2>
                    </div>
                    <div class="card-body">
                        
                    <form action="Teacherinsert.php" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="TeacherID">TeacherID</label>
                                <input type="number" name="tid" class="form-control" placeholder="TeacherID" required>
                            </div>
                            <div class="col">
                                <label for="Name">Name</label>
                                <input type="text" name="tname" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label for="PhoneNumber">Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="BackgroundCheck">BackgroundCheck</label>
                                <input type="text" name="background" class="form-control" placeholder="Background Check" required>
                            </div>
                            <div class="form-group">
                                <label for="Salary">Salery Band</label>
                                <input type="number" name="salary" class="form-control" placeholder="Salary Band" required>
                            </div>
                            <div class="form-group"><br>
                                <input type="submit" name="Teacheradd" value="Add" class="btn btn-primary btn-block">
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