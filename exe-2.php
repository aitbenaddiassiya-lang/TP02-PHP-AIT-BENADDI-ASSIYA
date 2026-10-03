<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<?php

$nom = "Amine";
$prenom = "Sara";
$age = 20;
$formation = "IAP";

$phrase = "Je m'appelle " . $prenom . " " . $nom;
$phrase .= ". J'ai " . $age . " ans.";
$phrase .= " Je suis en formation " . $formation . ".";
$phrase .= " J'apprends PHP.";

echo $phrase . "<br><br>";

$note = 12;
$Note = 16;

echo "note = " . $note . "<br>";
echo "Note = " . $Note . "<br>";

?>

</body>
</html>

