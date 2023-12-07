<?php
require_once('test.php');

if(isset($_GET['ParentID']) && isset($_POST['Parentsubmit'])){
    $parentid = $_GET['ParentID'];
    $newid = $_POST['paid'];
    $name = $_POST['paname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `parent` SET 
            `ParentID`='$newid',
            `ParentName`='$name',
            `ParentAddress`='$address',
            `ParentEmail`='$email',
            `ParentPhoneNumber`='$phone' 
            WHERE ParentID = $parentid";

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
<a href="parent.php">Back</a>