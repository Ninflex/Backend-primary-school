<?php

require_once('test.php');

if(isset($_POST['Teacheradd'])){
    $teacherid = $_POST['tid'];
    $teachername = $_POST['tname'];
    $teacheraddress = $_POST['address'];
    $teacherphone = $_POST['phone'];
    $background = $_POST['background'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO `teacher`(`TeacherID`, `TeacherName`, `TeacherAddress`, `TeacherPhoneNumber`, `BackgroundCheck`, `TeacherSalary`)
            VALUES ('$teacherid','$teachername','$teacheraddress','$teacherphone','$background','$salary')";

    if($con->query($sql) === TRUE){
        echo "Added to DataBase";
    }
    else{
        echo "Somthing Went Wrong";
    }
}
else{
echo "Invalid";
}

?>
<br>
<a href="teacher.php">Back</a>