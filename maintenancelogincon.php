<?php 

session_start(); 

include "db connection.php";

if (isset($_POST['staffnumber']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['staffnumber']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: maintenance login.php?error=student number is required");

        exit();

    }else if(empty($pass)){

        header("Location: maintenance login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM maintenancelogin WHERE staffnumber='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['staffnumber'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['staffnumber'] = $row['staffnumber'];

                $_SESSION['name'] = $row['name'];

                header("Location: maintenance landing.php");

                exit();

            }else{

                header("Location: maintenance login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: maintenance login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: maintenance login.php");

    exit();

}