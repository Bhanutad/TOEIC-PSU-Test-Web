<?php
session_start();
include  'config.php';

$sql = 'SELECT * FROM manageadmin WHERE Username ="'.$_POST['username'].'" AND Password = "'.$_POST['password'].'"';
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($numrows==0){

 echo "  <script>
		alert('Incorrect username or password, Please try again!');
		window.location  = 'index.php';
		</script>";
}else{
    
	$_SESSION["AdminID"] = $objResult["AdminID"];
            session_write_close();
            header("location:home.php");
		
}mysqli_close($connect);
?>