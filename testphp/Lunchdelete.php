<?php
require_once('test.php');

if(isset($_GET['LunchID'])){
    $lunchid = $_GET['LunchID'];
    $sql = "DELETE FROM lunch_money WHERE LunchID = $lunchid";

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
<a href="LunchMoney.php">back</a>