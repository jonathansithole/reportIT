<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "residence system";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql1 = "UPDATE  studentreports SET progress='resolved' WHERE reportid =$id";
    $sql = "UPDATE  maintenancestudentreports SET progress='resolved' WHERE reportid =$id";

    if($conn->query($sql) ===TRUE and $conn->query($sql1) ===TRUE){
        echo "done redirecting...";
        header ("refresh:1; url=studentreportsmaintenance.php");

    }
    else {
        echo " something went wrong";
    }
}
    else{
        die('id not provided');
    }
?>