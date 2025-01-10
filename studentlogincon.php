<?php 

session_start(); 

include "db connection.php";

if (isset($_POST['studentnumber']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['studentnumber']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: student login.php?error=student number is required");

        exit();

    }else if(empty($pass)){

        header("Location: student login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM studentlogin WHERE studentnumber='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['studentnumber'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['studentnumber'] = $row['studentnumber'];

                $_SESSION['name'] = $row['name'];

                header("Location: student report.php");

                exit();

            }else{

                header("Location: studentlogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: student login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: student login.php");

    exit();

}