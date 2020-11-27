<?php
include  'config.php';
session_start();
		$appID = $_GET["appID"];
       

        $sql = "DELETE FROM applicant WHERE appID=$appID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted admin.');";
                    echo "window.location = 'applicant.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>