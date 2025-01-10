<?php
$database_host = "localhost";
$database_user = "root";
$database_pass = "";
$database_name = "residence system";

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

if (mysqli_connect_error()){
    exit ('error connecting to the database' . mysqli_connect_error());

}
if (!isset($_POST['category'],$_POST['problem'],$_POST['block'],$_POST['description'],$_POST['image'])) {
    exit('Empty field(s)');
}
if (empty($_POST['category'] || empty($_POST['problem']) || empty($_POST['block']) || empty($_POST['description']) || empty($_POST['image']))) {
    exit('values empty');
}


        if($stmt =$con-> prepare('INSERT INTO blockreports (block,image,category,problem,description) VALUES(?,?,?,?,?)')) {
            $image = password_hash($_POST['image'],PASSWORD_DEFAULT);
            $stmt->bind_param('sssss', $_POST['block'],$image, $_POST['category'], $_POST['problem'], $_POST['description'] );
            $stmt-> execute();
            echo 'succesfully logged report, redirecting you to the report page';
           header ("refresh:5; url=block leader report.php");
        }
        else {
            echo'error occured';
        }
    
$stmt->close();

$con-> close();
?>