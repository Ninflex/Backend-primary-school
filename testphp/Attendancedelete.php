<?php
require_once('test.php');

if(isset($_GET['AttendanceID'])){
    $attendanceid = $_GET['AttendanceID'];
    $sql = "DELETE FROM attendance WHERE AttendanceID = $attendanceid";

    if($con->query($sql) === TRUE){
        echo "Deleted data";
    }
    else{
        echo "Something Went Wrong";
    }
}
else{
    die('No ID');
}

?>
<br>
<a href="attendance.php">back</a>