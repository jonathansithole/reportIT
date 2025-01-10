<?php 

session_start(); 

include "db connection.php";
$uname = $_POST['studentnumber'];

try{
 $sql = "SELECT * FROM studentreports";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

        while ($row =$result->fetch()){
        }
        unset($result);

                }
else {
    echo "no records found"
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