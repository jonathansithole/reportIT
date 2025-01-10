<?php
$database_host = "localhost";
$database_user = "root";
$database_pass = "";
$database_name = "residence system";

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

if (mysqli_connect_error()){
    exit ('error connecting to the database' . mysqli_connect_error());

}
if (!isset($_POST['category'],$_POST['problem'],$_POST['block'],$_POST['room'],$_POST['residence'],$_POST['description'],$_POST['image'], $_POST['studentnumber'])) {
    exit('Empty field(s)');
}
if (empty($_POST['category'] || empty($_POST['problem']) || empty($_POST['block']) || empty($_POST['room']) || empty($_POST['residence']) || empty($_POST['description']) || empty($_POST['image']) || empty($_POST['studentnumber']))) {
    exit('values empty');
}


        if($stmt =$con-> prepare('INSERT INTO studentreports (block,room,image,category,problem,residence,description, studentnumber) VALUES(?,?,?,?,?,?,?,?)')) {
          
            $stmt->bind_param('ssssssss', $_POST['block'],$_POST['room'],$_POST['image'], $_POST['category'], $_POST['problem'],$_POST['residence'], $_POST['description'],$_POST['studentnumber'] );
            $stmt-> execute();
            echo 'succesfully logged report, redirecting you to the report page';
           header ("refresh:1; url=student report.php");
        }
        else {
            echo'error occured';
        }
    
$stmt->close();

$con-> close();
?>