<?php
include  'config.php';
session_start();
		$scheduleID = $_GET["scheduleID"];
       

        $sql = "UPDATE schedule SET deleteStatus = 0
                WHERE scheduleID='$scheduleID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted schedule.');";
                    echo "window.location = 'schedule.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>