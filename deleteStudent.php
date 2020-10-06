<?php
include  'config.php';
session_start();
		$studentID = $_GET["studentID"];
       

        $sql = "DELETE FROM student WHERE studentID=$studentID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted student.');";
                    echo "window.location = 'studentlist.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>