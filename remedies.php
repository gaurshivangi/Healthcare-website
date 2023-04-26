<html>
<body>

<?php

$x=$_GET['finalDisease'];
echo "<h1>$x</h1>";
$home_remedies = array(
   "Common cold" => "Drink warm fluids, rest, use a humidifier, gargle with saltwater",
   "Pneumonia" => "Get plenty of rest, drink fluids, use a humidifier, take over-the-counter pain relievers",
   "Influenza" => "Get plenty of rest, drink fluids, take over-the-counter pain relievers, use a humidifier",
   "Allergies" => "Avoid allergens, use over-the-counter antihistamines, use nasal irrigation",
   "Anxiety" => "Practice relaxation techniques, exercise regularly, get enough sleep"
);

$food_plans = array(
   "Common cold" => "Drink warm fluids, eat foods high in vitamin C and zinc, avoid dairy products",
   "Pneumonia" => "Drink fluids, eat foods high in vitamin C and zinc, avoid dairy products",
   "Influenza" => "Drink fluids, eat foods high in vitamin C and zinc, avoid dairy products",
   "Allergies" => "Eat foods high in vitamin C and omega-3 fatty acids, avoid processed foods and sugar",
   "Anxiety" => "Eat foods rich in omega-3 fatty acids, complex carbohydrates, and magnesium"
);

$otc_medicines = array(
   "Common cold" => "Acetaminophen, ibuprofen, decongestants, cough suppressants",
   "Pneumonia" => "Antibiotics, acetaminophen, ibuprofen, decongestants, cough suppressants",
   "Influenza" => "Acetaminophen, ibuprofen, decongestants, cough suppressants, antiviral medication",
   "Allergies" => "Antihistamines, decongestants, nasal corticosteroids, allergy shots",
   "Anxiety" => "Antidepressants, anti-anxiety medication"
);


$remedies = $home_remedies[$x];
$food = $food_plans[$x];
$meds = $otc_medicines[$x];

echo "<h5>Home remedies</h5>: $remedies\n";
echo "<h5>Food plans</h5>: $food";
echo "<h5>OTC Medicines</h5>: $meds";

?>
</body>
</html>

