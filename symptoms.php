<html>
<body>
<form method="post">
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
</form>

<?php
if( isset($_POST['Submit'] ) )
{
	$diseases = array(
   "Common cold" => array("Fever", "Headache", "Cough", "Sore throat", "Fatigue", "Body aches/pain"),
   "Influenza" => array("Fever", "Headache", "Cough", "Fatigue", "Body aches/pain", "Nausea/Vomiting", "Diarrhea"),
   "Pneumonia" => array("Fever", "Cough", "Chest pain", "Shortness of breath", "Fatigue"),
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
      echo "<h2>Possible disease:<a href='remedies.php'> " . $disease . "</a></h2>";
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
$target="remedies.php";
$linkname="link";
while ( $count_dis <= 3)
{
foreach ($diseases as  $disease => $disease_symptoms)
{
	if( count(array_intersect($symptoms_a,$disease_symptoms)) == $max )
	{	
		if($count_dis <= 3)
		{
			$final_disease=$disease;
			$encoded_disease = urlencode($final_disease);
			echo "<h2>Possible disease:<a href='remedies.php?disease=$encoded_disease'> " . $disease . "</a></h2>"; 
			$count_dis = $count_dis + 1;
		}
    	}
}
$max=$max-1;
}
}
echo 'Click on the <i>Disease</i> to know more about the remedies, food plans or OTC medicines you can take.';

}
?>



</body>
</html>

