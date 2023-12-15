<?php
require_once('test.php');

if(isset($_GET['ClassID']) && isset($_POST['Classsubmit'])){
    $classid = $_GET['ClassID'];
    $newid = $_POST['cid'];
    $name = $_POST['cname'];
    $teacherid = $_POST['tid'];
    $capacity = $_POST['capacity'];
    

    $sql = "UPDATE `class` SET 
    `ClassID`='$newid',
    `TeacherID`='$teacherid',
    `ClassName`='$name',
    `ClassCapacity`='$capacity' 
    WHERE ClassID = $classid";

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
<a href="class.php">Back</a>