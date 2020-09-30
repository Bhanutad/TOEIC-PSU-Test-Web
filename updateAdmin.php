<?php 
include  'config.php';
$adminID = $_POST['adminID'];
$name = $_POST['name'];
$surname= $_POST['surname'];
$username= $_POST['username'];
$password= $_POST['password'];
                $sql = "UPDATE manage_admin SET  
                name ='$name' ,
                surname='$surname' , 
                username='$username' ,
                password='$password' 
                WHERE adminID ='$adminID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully updated admin.');";
                    echo "window.location = 'admin.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'admin.php'; ";
                    echo "</script>";
                }
 
?>