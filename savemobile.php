<?php
	include("clientobjects.php");
	$mobile=$_GET['mobile']; //echo $mobile; die();
	
	//check for duplication
	$chk=mysql_fetch_array(mysql_query("select count(id) as cnt from sms where mobile='$mobile'"));
	if($chk['cnt']>0)
		echo "This number has already beed subscribed";
	else
	{	
		$sql="insert into sms(id,mobile) values('', '$mobile')";
		mysql_query($sql);
		echo "You have beed subscribed successfully";
	}
?>