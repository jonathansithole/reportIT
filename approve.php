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
    $sql1 = "UPDATE studentreports SET progress = 'approved' where reportid =$id";
    $sql = "INSERT INTO maintenancestudentreports SELECT * FROM studentreports WHERE reportid =$id";


    if($conn->query($sql) ===TRUE and $conn->query($sql1) ===TRUE){
    
        echo "forwarded to maintenance redirecting...";
        header ("refresh:1; url=studentreportswarden.php");

    }
    else {
        echo " something went wrong";
    }
}
    else{
        die('id not provided');
    }
?>