<?php

$makeup = [
    "Base" => "Revitalizante iluminador",
"Corrector" => "correcteur",
"delineador" => "Corrector Innstant Age Rewind",
"iluminador" => "les beigue",
"Mascara de pestañas" => "nor alluire",
"polvo suelto" => "poudre universelle",
"Labial" => "Le rougue duo",
"sombra de ojos" => "Les 4 ombre",
"Balsamo labial" => "Hydra beauty",
"Rubor en polvo" => "joues contraste",
];

$valor = [
"Base" => 1.500,
"corrector" => 2.700,
"Delineador" => 121,
"Iluminador" => 789,
"Mascara de pestanas" => 746,
"polvo suelto" => 859 ,
"labial" => 800,
"Sombra de ojos" => 1.300 ,
"balsamo labial" => 600,
"Rubor en polvo" => 2.400,
];

$Chanel= [
 $makeup,
 $valor
];

echo json_encode($chanel);
?>
