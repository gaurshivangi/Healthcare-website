<html>
<body>
<form method="post" >
   <input type="checkbox" name="symptoms[]" value="Fever">Fever<br>
   <input type="checkbox" name="symptoms[]" value="Headache">Headache<br>
   <input type="checkbox" name="symptoms[]" value="Cough">Cough<br>
   <input type="checkbox" name="symptoms[]" value="Sore throat">Sore throat<br>
   <input type="checkbox" name="symptoms[]" value="Fatigue">Fatigue<br>
   <input type="checkbox" name="symptoms[]" value="Body aches/pain">Body aches/pain<br>
   <input type="checkbox" name="symptoms[]" value="Chest pain">Chest pain<br>
   <input type="checkbox" name="symptoms[]" value="Shortness of breath">Shortness of breath<br>
   <input type="checkbox" name="symptoms[]" value="Nausea/Vomiting">Nausea/Vomiting<br>
   <input type="checkbox" name="symptoms[]" value="Diarrhea">Diarrhea<br>
   <input type="checkbox" name="symptoms[]" value="Dizziness">Dizziness<br>
   <input type="checkbox" name="symptoms[]" value="Lightheadedness">Lightheadedness<br>
   <input type="checkbox" name="symptoms[]" value="Skin rash">Skin rash<br>
   <input type="checkbox" name="symptoms[]" value="Itching">Itching<br>
   <input type="submit" name="Submit" value="Submit">
   
<?php
if( isset($_POST['Submit'] ) )
{
	$diseases = array(
   "Common cold" => array("Fever", "Headache", "Cough", "Sore throat", "Fatigue", "Body aches/pain"),
   "Pneumonia" => array("Fever", "Cough", "Chest pain", "Shortness of breath", "Fatigue"),
   "Influenza" => array("Fever", "Headache", "Cough", "Fatigue", "Body aches/pain", "Nausea/Vomiting", "Diarrhea"),
   "Allergies" => array("Headache", "Sore throat", "Itching", "Skin rash"),
   "Anxiety" => array("Dizziness", "Lightheadedness")
   
);

$symptoms_a = $_POST['symptoms'];
$one=1;
$max=0;
$matches=0;
if(count($symptoms_a)==$one)
{
	foreach ($diseases as  $disease => $disease_symptoms) 
{
	$match=count(array_intersect($symptoms_a,$disease_symptoms));
   if ( $match == "1" ) 
   {
      echo "$disease\n";
   }
   
}

}
else
{	
foreach ($diseases as  $disease => $disease_symptoms) 
{
	$matches=count(array_intersect($symptoms_a,$disease_symptoms));
   if ( $matches > $max ) 
   {
      $max=$matches;
   }
   
}
$count_dis=0;
while ( $count_dis <= 3)
{
foreach ($diseases as  $disease => $disease_symptoms)
{
	if( count(array_intersect($symptoms_a,$disease_symptoms)) == $max )
	{
		$final_disease=$disease;
		echo "<h2>Possible disease: " . $disease . "</h2>"; 
		$count_dis = $count_dis + 1;
    	}
}
$max=$max-1;
}
}
}
?>
<p>
Do you want to know about remedies, food plans and medicines you can take in this disease?

<form action="remedies.php" method="get">
<input type="hidden" name="finalDisease" value="<?php echo "$final_disease" ?>">
<input type="submit" name="remedy" value="Click here">
</form>
</p>

</form>
</body>
</html>

