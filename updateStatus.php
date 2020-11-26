<?php 
include  'config.php';
$examID = $_GET['examID'];
                $sql = "UPDATE exam SET statusShow = 1
                WHERE examID ='$examID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully confirmed.');";
                    echo "window.location = 'home.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'home.php'; ";
                    echo "</script>";
                }
 
?>