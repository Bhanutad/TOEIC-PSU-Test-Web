<?php
include  'config.php';
session_start();
		$scheduleID = $_GET["scheduleID"];
       

        $sql = "DELETE FROM schedule WHERE scheduleID=$scheduleID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted admin.');";
                    echo "window.location = 'schedule.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>