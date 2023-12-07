<?php
require_once('test.php');

if(isset($_GET['LunchID']) && isset($_POST['Lunchsubmit'])){
    $lunchid = $_GET['LunchID'];
    $newid = $_POST['lid'];
    $balance = $_POST['balance'];
   

    $sql = "UPDATE `lunch_money` SET 
    `LunchID`='$newid',
    `balance`='$balance' 
    WHERE LunchID = $lunchid";

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
<a href="LunchMoney.php">Back</a>