<?php 
include  'config.php';
$type = $_POST['type'];
$price = $_POST['price'];

                $sql = "INSERT INTO applicant ( appID, type, price)
				VALUES ('', '$type', '$price')";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully added admin.');";
                    echo "window.location = 'applicant.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'applicant.php'; ";
                    echo "</script>";
                }
?>