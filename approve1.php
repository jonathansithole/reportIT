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
    $sql = "INSERT INTO maintenanceblockreports SELECT * FROM blockreports WHERE reportid =$id";
    $sql1 = "UPDATE blockreports SET progress = 'approved' where reportid =$id";

    if($conn->query($sql) ===TRUE and $conn->query($sql1) ===TRUE){
        echo "forwarded to maintenance";
     
        header ("refresh:1; url=blockreportswarden.php");

    }
    else {
        echo " something went wrong";
    }
}
    else{
        die('id not provided');
    }
?>