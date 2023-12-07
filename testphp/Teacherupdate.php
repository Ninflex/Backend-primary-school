<?php
require_once('test.php');

if(isset($_GET['TeacherID']) && isset($_POST['Teachersubmit'])){
    $teacherid = $_GET['TeacherID'];
    $newid = $_POST['tid'];
    $name = $_POST['tname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $background = $_POST['background'];
    $salary = $_POST['salary'];

    $sql = "UPDATE `teacher` SET 
            `TeacherID`='$newid',
            `TeacherName`='$name',
            `TeacherAddress`='$address',
            `TeacherPhoneNumber`='$phone',
            `BackgroundCheck`='$background',
            `TeacherSalary`='$salary' 
            WHERE TeacherID = $teacherid";

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