<?php
require_once('test.php');

if(isset($_GET['ParentID'])){
    $parentid = $_GET['ParentID'];
    $sql = "DELETE FROM parent WHERE ParentID = $parentid";

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
<a href="parent.php">back</a>