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
    $sql1= "UPDATE blockreports SET progress = 'dispatched contractor' where reportid =$id";
    $sql = "UPDATE  maintenanceblockreports SET progress='dispatched contractor' WHERE reportid =$id";
    

    if($conn->query($sql) ===TRUE and $conn->query($sql1) ===TRUE){
        echo "Contractor dispatched redirecting...";
        header ("refresh:1; url=blockreportsmaintenance.php");

    }
    else {
        echo " something went wrong";
    }
}
    else{
        die('id not provided');
    }
?>