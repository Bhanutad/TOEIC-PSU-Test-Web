<?php 
include  'config.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];

                $sql = "INSERT INTO manage_admin ( adminID, name, surname, username, password)
				VALUES ('', '$name', '$surname', '$username', '$password')";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully added admin.');";
                    echo "window.location = 'admin.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'addAdmin.php'; ";
                    echo "</script>";
                }
?>