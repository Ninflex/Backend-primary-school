<?php

require_once('test.php');

if(isset($_POST['Attendanceadd'])){
    $attendanceid = $_POST['aid'];
    $pupilid = $_POST['pid'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $classid = $_POST['cid'];
    

    $sql = "INSERT INTO `attendance`(`AttendanceID`, `PupilID`, `ClassID`, `Date_`, `status_`) 
            VALUES ('$attendanceid','$pupilid','$classid','$date','$status')";

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