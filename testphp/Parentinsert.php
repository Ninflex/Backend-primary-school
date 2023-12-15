<?php

require_once('test.php');

if(isset($_POST['Parentadd'])){
    $parentid = $_POST['paid'];
    $parentname = $_POST['paname'];
    $parentaddress = $_POST['address'];
    $parentemail = $_POST['email'];
    $parentphone = $_POST['phone'];

    $sql = "INSERT INTO `parent`(`ParentID`, `ParentName`, `ParentAddress`, `ParentEmail`, `ParentPhoneNumber`) 
            VALUES ('$parentid','$parentname','$parentaddress','$parentemail','$parentphone')";

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