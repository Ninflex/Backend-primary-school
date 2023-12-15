<?php

require_once('test.php');
$query = "SELECT * FROM teacher";
$result = mysqli_query($con,$query);

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
    
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto p-2">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home</a>
      </li>
      <li class="nav-item dropdown">
        <!-- <a class="nav-link" href="index.php">Student</a> -->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="pupil.php">View Student</a>
          <a class="dropdown-item" href="LunchMoney.php">Lunch Money</a>
          <a class="dropdown-item" href="Medical.php">Medical</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="parent.php">Parents</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="class.php">Class</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Teacher Database</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Teacher ID</td>
                                <td>Name</td>
                                <td>Address</td>
                                <td>Phone Number</td>
                                <td>Background Check</td>
                                <td>Salary Band</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                            <td><?php echo $row['TeacherID']; ?></td>
                            <td><?php echo $row['TeacherName']; ?></td>
                            <td><?php echo $row['TeacherAddress']; ?></td>
                            <td><?php echo $row['TeacherPhoneNumber']; ?></td>
                            <td><?php echo $row['BackgroundCheck']; ?></td>
                            <td><?php echo $row['TeacherSalary']; ?></td>
                            <?php echo "<td><a class='btn btn-primary' href='Teacheredit.php?TeacherID=" .$row['TeacherID'] ."'> Edit</a></td>" ?>
                            <?php echo "<td><a class='btn btn-danger' href='Teacherdelete.php?TeacherID=" .$row['TeacherID'] ."'> Delete</a></td>" ?>
                            </tr>
                            <?php
                                }
                            ?>

                        </table>
                    </div>
                        <div class="form-group"><br>
                            <a class="btn btn-primary form-control" href="Teacheradd.php"> Add</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>