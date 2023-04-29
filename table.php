<html>
<body>
<table border="1">
<tr><th colspan="3">Remedies for <?php echo $_GET['disease']; ?>:</th></tr>
<tr><td><strong>Home Remedies:</strong></td><td><strong>Dietary Advice:</strong></td><td><strong>OTC Medicines:</strong></td></tr>
<?php
$x=urldecode($_GET['disease']);
$home_remedies = array(
   "Common cold" => "Drink warm fluids, Use a humidifier, Gargle with saltwater, Use Throat lozenge to soothe soar throat",
   "Pneumonia" => "Get plenty of rest, Use a humidifier, Take over-the-counter pain relievers, Seek professional help to avoid worsening of condition",
   "Influenza" => "Get plenty of rest, Take over-the-counter pain relievers, Use a humidifier, Use Throat lozenge to soothe soar throat",
   "Allergies" => "Avoid allergens, Use over-the-counter antihistamines, Use nasal irrigation, Use essential oils",
   "Anxiety" => "Practice relaxation techniques, Exercise regularly, Get enough sleep, Limit Caffeine intake"
);
$food_plans = array(
   "Common cold" => "Drink warm fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief.",
   "Pneumonia" => "Drink fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief",
   "Influenza" => "Drink fluids, Eat foods high in vitamin C and zinc, Avoid dairy products, Use ginger paste or Honey for throat relief",
   "Allergies" => "Eat foods high in vitamin C and omega-3 fatty acids, Drink Green tea in the morning, Avoid processed foods and sugar, Use ginger paste or Honey in throat",
   "Anxiety" => "Eat foods rich in omega-3 fatty acids, Complex carbohydrates, Magnesium, Dark chocolate may help ease anxiety"
);
$otc_medicines = array(
   "Common cold" => "Acetaminophen, Ibuprofen, Decongestants, Cough suppressants",
   "Pneumonia" => "Antibiotics, Acetaminophen, Ibuprofen, Decongestants",
   "Influenza" => "Acetaminophen, Ibuprofen, Decongestants, Antiviral medication",
   "Allergies" => "Antihistamines, Decongestants, Nasal corticosteroids, Allergy shots",
   "Anxiety" => "Antidepressants, Anti-anxiety medication"
);
$remedies = $home_remedies[$x];
$remedies_list = explode(",", $remedies);
$meds = $otc_medicines[$x];
$meds_list = explode(",", $meds);
$food = $food_plans[$x];
$food_list = explode(",", $food);
for ($i = 0; $i < count($remedies_list) || $i < count($meds_list) || $i < count($food_list); $i++) {
    echo "<tr>";
    if ($i < count($remedies_list)) {
        echo "<td>".$remedies_list[$i]."</td>";
    } else {
        echo "<td></td>";
    }
    if ($i < count($food_list)) {
        echo "<td>".$food_list[$i]."</td>";
    } else {
        echo "<td></td>";
    }
    if ($i < count($meds_list)) {
        echo "<td>".$meds_list[$i]."</td>";
    } else {
        echo "<td></td>";
    }
    echo "</tr>";
    }
?>
</table>
</body>
</html>

