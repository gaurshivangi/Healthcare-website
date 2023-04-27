<html>
<body>
<?php
	
	$fp=fopen("userinfo.txt", "a+");
	
	if(isset($_POST["name"]))
	{
		$nam=$_POST['name'];
		fwrite($fp, "$nam, ");
	}
	
	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		fwrite($fp, " $email, " );
	}
	
	
	if(isset($_POST['address']))
	{
		$add=$_POST['address'];
		fwrite($fp, "$add \n" );
	}
	echo "Query submitted";
	
	fclose($fp);
?>
</body>
</html>

	
