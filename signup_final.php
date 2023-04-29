<html>
<body>
<?php
	if(isset($_POST['submit']))
	{
	$fp=fopen("logininfo.txt", "a+");
	
	
	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		fwrite($fp, "$email," );
	}
	
	
	if(isset($_POST['password']))
	{
		$add=$_POST['password'];
		fwrite($fp, "$add," );
	}
	if(isset($_POST['name']))
	{
		$nam=$_POST['name'];
		fwrite($fp, "$nam," );
	}
	if(isset($_POST['gender']))
	{
		$gen=$_POST['gender'];
		fwrite($fp, "$gen," );
	}
	if(isset($_POST['age']))
	{
		$ag=$_POST['age'];
		fwrite($fp, "$ag," );
	}
	if(isset($_POST['dise']))
    	{
        	$diseases = $_POST['dise'];
        	$diseases_str = implode(",", $diseases);
        	fwrite($fp, "$diseases_str\n");
  	}
	
	fclose($fp);
	
		header("Location: index.html");

	}
	
?>
<form method="POST">
EMAIL:
<input name="email" /><br><br>
PASSWORD:
<input type="password" name="password" /><br><br>

NAME:
<input name="name" /><br><br>
MEDICAL HISTORY:<br>
AGE:<br>
<input type="number" name="age" />
GENDER:<br>
<input type="radio"  name="gender" value="male" /> Male<br><br>
<input type="radio"  name="gender" value="female" />Female<br><br>
<input type="radio"  name="gender" value="others" checked />Prefer not to say<br><br>
Chronic Diseases:<br>
   <input type="checkbox" name="dise[]" value="Diabetes">Diabetes<br>
   <input type="checkbox" name="dise[]" value="Cholestrol">Cholestrol<br>
   <input type="checkbox" name="dise[]" value="Blood pressure">Blood Pressure<br>
   <input type="checkbox" name="dise[]" value="Thyroid">Thyroid<br>
   <input type="checkbox" name="dise[]" value="Arthritis">Arthiritis<br>
   <input type="checkbox" name="dise[]" value="Kidney Problems">Kidney Problems<br>
   <input type="checkbox" name="dise[]" value="Asthma">Asthma<br>
   <input type="checkbox" name="dise[]" value="Depression">Depression<br>
   <input type="checkbox" name="dise[]" value="Cardiac Arrest">Cardiac Arrest<br>
   <input type="checkbox" name="dise[]" value="Allergies">Allergies<br>
<input  type="submit" name="submit" value="submit"> <br><br>


</form>
</body>
</html>




