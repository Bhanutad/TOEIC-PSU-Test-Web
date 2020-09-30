<?php
include  'config.php';
session_start();
		$adminID = $_GET["adminID"];
       

        $sql = "DELETE FROM manage_admin WHERE adminID=$adminID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted admin.');";
                    echo "window.location = 'admin.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>