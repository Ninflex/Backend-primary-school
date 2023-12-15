<?php
require_once('test.php');

if(isset($_GET['AttendanceID']) && isset($_POST['Attendancesubmit'])){
    $attendanceid = $_GET['AttendanceID'];
    $newid = $_POST['aid'];
    $pupilid = $_POST['pid'];
    $classid = $_POST['cid'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    

    $sql = "UPDATE `attendance` SET 
    `AttendanceID`='$newid',
    `PupilID`='$pupilid',
    `ClassID`='$classid',
    `Date_`='$date',
    `status_`='$status'
     WHERE AttendanceID = $attendanceid";

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
<a href="attendance.php">Back</a>