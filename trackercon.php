<?php 

session_start(); 

include "db connection.php";



if (isset($_POST['studentnumber'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['studentnumber']);

    if (empty($uname)) {

        header("Location: progress tracker.php?error=student number is required");

        exit();

    }else{

        $sql = "SELECT * FROM studentreports WHERE studentnumber='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['studentnumber'] === $uname) {
                $sql="SELECT progress FROM studentreports WHERE studentnumber =$uname";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows>0){
                    while ($row =$result->fetch_assoc()){
                      $progress= $row["progress"];
                      header("Location: progress tracker.php?message=progress:  $progress");
                     
                      exit();
                    
                    }
                }
            

              

         

                header("progress track.php");

                exit();

            }else{

                header("Location: progress tracker.php?error=Student number doest exist");

                exit();

            }

        }else{

            header("Location: progress tracker.php?error=Student number doest exist");

            exit();

        }

    }

}else{
   

    exit();

}