<?php

$aantalPersonen;

$arrayPersonen = array();

echo "Hoveel personen wil je vragen?" . "\n";

$aantalPersonen = readline();

if (!is_numeric($aantalPersonen))
{
  echo $aantalPersonen . ' is geen getal';
  exit();
}

for ($i=0; $i < $aantalPersonen; $i++)
{
  $persoon = array("Naam"=>'',"Droom"=>'');
  echo "Wat is je naam? " . "\n";
  $persoon['Naam'] = readline();
  echo "Wat is je droom? " . "\n";
  $persoon['Droom'] = readline();
  $arrayPersonen[$i] = $persoon;
}

for ($i=0; $i < $aantalPersonen; $i++)
{
  echo $arrayPersonen[$i]['Naam'] . ' zijn droom is ' . $arrayPersonen[$i]['Droom'] . "\n";
}



 ?>
