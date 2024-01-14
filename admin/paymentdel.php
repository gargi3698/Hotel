<?php

include ('db.php');

$id=$_GET['cid'];
if($id=="")
{
echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
		header("Location: payment.php");


}

else{
$view="DELETE FROM `payment` WHERE id ='$id' ";
$view2="DELETE FROM `roombook` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Customer details Remove") </script>' ;
		header("Location: payment.php");
	}
	if($re = mysqli_query($con,$view2))
	{
		echo '<script>alert("Customer details Remove") </script>' ;
		header("Location: roombook.php");
	}


}







?>