<?php

require_once('test.php');

if(isset($_POST['Lunchadd'])){
    $lunchid = $_POST['lid'];
    $balance = $_POST['balance'];
    
    $sql = "INSERT INTO `lunch_money`(`LunchID`, `balance`) 
            VALUES ('$lunchid','$balance')";

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