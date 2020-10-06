<?php
include  'config.php';
session_start();
		$examID = $_GET["examID"];
       

        $sql = "DELETE FROM exam WHERE examID=$examID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted.');";
                    echo "window.location = 'home.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>