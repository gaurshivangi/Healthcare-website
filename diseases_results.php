<html>
<body>

<?php

// Array containing possible diseases based on selected symptoms
$diseases = array(
   "Common cold" => array("Fever", "Headache", "Cough", "Sore throat", "Fatigue", "Body aches/pain"),
   "Pneumonia" => array("Fever", "Cough", "Chest pain", "Shortness of breath", "Fatigue"),
   "Influenza" => array("Fever", "Headache", "Cough", "Fatigue", "Body aches/pain", "Nausea/Vomiting", "Diarrhea"),
   "Allergies" => array("Headache", "Sore throat", "Itching", "Skin rash"),
   "Anxiety" => array("Dizziness", "Lightheadedness")
);

// Get selected symptoms from form submission
$symptoms = $_POST['symptoms'];

// Loop through diseases and check if all selected symptoms match
foreach ($diseases as  $disease => $disease_symptoms) {
   if (count(array_intersect($symptoms, $disease_symptoms)) == count($disease_symptoms)) 
   {
      echo "<h2>Possible disease: " . $disease . "</h2>";
      // You can add more details about the disease such as remedies and food plans here.
      break;
   }
}
?>
</body>
</html>

