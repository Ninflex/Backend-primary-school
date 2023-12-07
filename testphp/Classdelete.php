<?php
require_once('test.php');

if(isset($_GET['ClassID'])){
    $classid = $_GET['ClassID'];
    $sql = "DELETE FROM class WHERE ClassID = $classid";

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
<a href="class.php">back</a>