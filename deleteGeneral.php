<?php
include  'config.php';
session_start();
		$genaralID = $_GET["generalID"];
       

        $sql = "DELETE FROM general WHERE generalID=$generalID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted general.');";
                    echo "window.location = 'general.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>