<?php

require_once('test.php');

if(isset($_POST['Classadd'])){
    $classid = $_POST['cid'];
    $teacherid = $_POST['tid'];
    $classname = $_POST['cname'];
    $capacity = $_POST['capacity'];
    

    $sql = "INSERT INTO `class`(`ClassID`, `TeacherID`, `ClassName`, `ClassCapacity`) 
            VALUES ('$classid','$teacherid','$classname','$capacity')";

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