<html>
<body>

<?php
	#$fr = fopen("logininfo.txt", "r");
	$matchemail = $_POST['email'];
	$matchpassword = $_POST['password'];
	$userinfo = file_get_contents("logininfo.txt");
	$users = explode("\n", $userinfo);
	$results = array();
	$diseases = array();
	foreach($users as $user)
	{
		$fields = explode(",", $user);
		#echo "". $matchemail. "  " .$fields[0] . "<br>";
		#echo "".$matchpassword  . "  " . $fields[1] . "<br>";
		#echo "$fields[0] == $matchemail";
		if ("$fields[0]" == "$matchemail" && "$fields[1]" == "$matchpassword")  
			{
				$results[] = array($fields[0], $fields[1]);
				$user_name=$fields[2];
				$gender=$fields[3];
				$age=$fields[4];
				for($i=5; $i < count($fields); $i++)
				{
					$diseases[] = $fields[$i];
				}
				break;
			} 
	}
	
	$queryinfo = file_get_contents("userinfo.txt");
	$query = explode("\n", $queryinfo);
	
	
	if (count($results) > 0)
	{
		echo "<h1>USER INFORMATION</h1>";
		echo "Name: ".  $user_name . "<br>";
		echo "Gender: ".  $gender . "<br>";
		echo "Medical History: <br>";
		foreach ($diseases as $disease)
		{
    			echo "<li>". $disease . "</li><br>";
		}
		
	}
	else 
	{
		echo "No results found.";
		header("Location: tosearch.php");
	}
	
	$queryinfo = file_get_contents("userinfo.txt");
	$query = explode("\n", $queryinfo);
	
	
	
	foreach($query as $queries)
	{
		$field = explode(",", $queries);
		
		if($field[1] == $results[0][0])
		{
			echo "<p>Past Queries: </p>";
			echo "<i> ". $field[2]."</i><br>";
		}
	}
			
			
	
?>

</body>
</html>
