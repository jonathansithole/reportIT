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
    $sql = "DELETE FROM blockreports WHERE reportid =$id";
    

    if($conn->query($sql) ===TRUE){
        echo "data has been deleted redirecting..";
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