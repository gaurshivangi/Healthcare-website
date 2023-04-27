<html>
<body>
<?php

$x=urldecode($_GET['disease']);
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
$remedies_list = explode(",", $remedies);

echo "<h2>Remedies for $x:</h2>";
echo "<ul>";
foreach ($remedies_list as $remedy) {
    echo "<li>$remedy</li>";
}
echo "</ul>";
#####
$food = $food_plans[$x];
$food_list = explode(",", $food);

echo "<h2>Dietary Advice for $x:</h2>";
echo "<ul>";
foreach ($food_list as $food_items) {
    echo "<li>$food_items</li>";
}
echo "</ul>";
########

$meds = $otc_medicines[$x];
$meds_list = explode(",", $meds);

echo "<h2>OTC Medicines recommended for $x:</h2>";
echo "<ul>";
foreach ($meds_list as $medcine) {
    echo "<li>$medcine</li>";
}
echo "</ul>";
#####
?>
</body>
</html>

