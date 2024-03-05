<?php

$makeup = [
    "Primer" => "Primer Baby Skin",
"Base" => "Base Fit Me Matte Poreless",
"Corrector" => "Corrector Instant Age Rewind",
"Paleta de ojos" => "The City Mini",
"Mascara de pestañas" => "Lash Sensational Sky High",
"Delineador" => "Tattoo Liner",
"Lipgloss" => "Lifter Gloss",
"Labial" => "Super Stay Matte Ink",
"Lip Liner" => "Color Sensational Lip Liner",
"Lapiz de Cejas" => "Express Brow Shaping Pencil",
];

$precios = [
"Primer Baby Skin" => 185
"Base Fit Me Matte Poreless" => 223
"Corrector Instant Age Rewind" => 121
"Paleta The City Mini" => 239
"Mascara Lash Sensational Sky High" => 210
"Delineador Tattoo Liner" => 175
"Lipgloss Lifter Gloss" => 209
"Labial Super Stay Matte Ink" => 140
"Color Sensational Lip Liner" => 80
"Express Brow Shaping Pencil" => 55
];

$maybelline = [
 $makeup,
 $precios
];

echo json_encode($maybelline);
?>
