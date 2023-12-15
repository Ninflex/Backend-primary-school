<?php
require_once('test.php');

if(isset($_GET['TeacherID'])){
    $teacherid = $_GET['TeacherID'];
    $sql = "DELETE FROM teacher WHERE TeacherID = $teacherid";

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
<a href="teacher.php">back</a>