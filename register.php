<?php
$database_host = "localhost";
$database_user = "root";
$database_pass = "";
$database_name = "residence system";

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

if (mysqli_connect_error()){
    exit ('error connecting to the database' . mysqli_connect_error());

}
if (!isset($_POST['name'],$_POST['surname'],$_POST['studentnumber'],$_POST['cell'],$_POST['email'],$_POST['password'])) {
    exit('Empty field(s)');
}
if (empty($_POST['name'] || empty($_POST['surname']) || empty($_POST['studentnumber']) || empty($_POST['cell']) || empty($_POST['email']) || empty($_POST['password']))) {
    header("Location: register account.php?error=fill in missing values");
    exit('values empty');
}


if ($stmt = $con->prepare( 'SELECT id, password FROM studentlogin WHERE Studentnumber=?')){
    $stmt->bind_param('s', $_POST['studentnumber']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {
        header("Location: register blockleader.php?error=Student number already exists, try again. please log one request at a time");
    }
  
    $studentnum = ($_POST['studentnumber']);

    $name = ($_POST['name']);
    $surname = ($_POST['surname']);
    $cell = ($_POST['cell']);
    $pass = ($_POST['password']);
    $email = ($_POST['email']);
  
    if(empty($name)){

        header("Location: register account.php?error=name is required");

        exit();
    }else if(empty($surname)){

        header("Location: register account.php?error=surname is required");

        exit();
    }
     else if (empty($studentnum)) {

        header("Location: register account.php?error=student number is required");

        exit();
    }else if(empty($cell)){

        header("Location: register account.php?error=cell number is required");

        exit();
    }else if(empty($email)){

        header("Location: register account.php?error=email is required");

        exit();

    }else if(empty($pass)){

        header("Location: register account.php?error=Password is required");

        exit();
   
   
  
    }
    else{
        if($stmt =$con-> prepare('INSERT INTO studentlogin (studentnumber,password,name,surname,cell,email) VALUES(?,?,?,?,?,?)')) {
           
            $stmt->bind_param('ssssss', $_POST['studentnumber'],$_POST['password'], $_POST['name'], $_POST['surname'],$_POST['cell'], $_POST['email'] );
            $stmt-> execute();
            echo 'succesfully registered, redirecting you to the login page';
           header ("refresh:1; url=wardenlanding.php");
        }
        else {
            echo'error occured';
        }
    }
$stmt->close();
}
else{
    echo 'error occured';
}
$con-> close();
?>
