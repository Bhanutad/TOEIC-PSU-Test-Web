<?php
session_start();
include  'config.php';

$sql = 'SELECT * FROM manage_admin WHERE username ="'.$_POST['username'].'" AND password = "'.$_POST['password'].'"';
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($numrows==0){

 echo "  <script>
		alert('Incorrect username or password, Please try again!');
		window.location  = 'index.php';
		</script>";
}else{
    
	$_SESSION["adminID"] = $objResult["adminID"];
            session_write_close();
            header("location:home.php");
		
}mysqli_close($connect);
?>