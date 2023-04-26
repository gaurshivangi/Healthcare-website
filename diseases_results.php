<html>
<body>

<?php
$diseases = array(
   "Common cold" => array("Fever", "Headache", "Cough", "Sore throat", "Fatigue", "Body aches/pain"),
   "Pneumonia" => array("Fever", "Cough", "Chest pain", "Shortness of breath", "Fatigue"),
   "Influenza" => array("Fever", "Headache", "Cough", "Fatigue", "Body aches/pain", "Nausea/Vomiting", "Diarrhea"),
   "Allergies" => array("Headache", "Sore throat", "Itching", "Skin rash"),
   "Anxiety" => array("Dizziness", "Lightheadedness")
);

$symptoms = $_POST['symptoms'];
$max=0;
foreach ($diseases as  $disease => $disease_symptoms) 
{
	$matches=count(array_intersect($symptoms, $disease_symptoms)
   if ($matches > $max) 
   {
      $max=$matches;
   }
}

foreach ($diseases as  $disease => $disease_symptoms)
{
	if(count(array_intersect($symptoms, $disease_symptoms) == $max)
	{
		echo "<h2>Possible disease: " . $disease . "</h2>";
    	break;
    }
}
?>
</body>
</html>
