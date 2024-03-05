<?php

$makeup = [
    "Paleta de sombra" => "Eyeshadow Palette",
"Polvo Suelto" => "polvo para cara",
"Little Angel Dewy Hydrating" => "hidratante",
"Colorete en Polvo Strawberry Rococo" => "polvo",
"Colorete Swan" => "polvo swan",
"Strawberry 5 Color Eyeshadow" => "polvo ice",
"Polvo Suelto Swan Ballet Loose Powder" => "polvo ballet",
"Little Angel Dewy" => "litte",
"Angel Cream Blusher" => "cream bush",
"Brillo Labial" => "labial",
];

$precios = [
"Paleta de sombra" => "646.20 Pesos",
"Polvo Suelto" => "646.20 Pesos",
"Little Angel Dewy Hydrating" => "646.20Pesos",
"Colorete en Polvo Strawberry Rococo" => "480.03 Pesos",
"Colorete Swan" => "480.03 Pesos",
"Strawberry 5 Color Eyeshadow" => "646.20 Pesos",
"Polvo Suelto Swan Ballet Loose Powder" => "646.20 Pesos",
"Little Angel Dewy" => "646.20Pesos",
"Angel Cream Blusher" => "480.03Pesos",
"Brillo labial" => "406.18 Pesos",
];

$FlowerKnows = [
 $makeup,
 $precios
];

echo json_encode($FlowerKnows);
?>
