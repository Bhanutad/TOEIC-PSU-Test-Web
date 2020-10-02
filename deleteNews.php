<?php
include  'config.php';
session_start();
		$newsID = $_GET["newsID"];
       

        $sql = "DELETE FROM news WHERE newsID=$newsID ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully deleted admin.');";
                    echo "window.location = 'news.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.);";
                    echo "</script>";
                }
?>