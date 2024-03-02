<?php

$makeup = [
    "Primer" => "Primer Baby Skin"
"Base" => "Base Fit Me Matte Poreless"
"Corrector" => "Corrector Instant Age Rewind"
"Paleta de ojos" => "The City Mini"
"Mascara de pestañas" => "Lash Sensational Sky High"
"Delineador" => "Tattoo Liner"
"Lipgloss" => "Lifter Gloss"
"Labial" => "Super Stay Matte Ink"
"Lip Liner" => "Color Sensational Lip Liner"
"Lapiz de Cejas" => "Express Brow Shaping Pencil"
];

$precios = [
"Primer Baby Skin" => "185 Pesos"
"Base Fit Me Matte Poreless" => "223 Pesos"
"Corrector Instant Age Rewind" => "121 Pesos"
"Paleta The City Mini" => "239 Pesos"
"Mascara Lash Sensational Sky High" => "210 Pesos"
"Delineador Tattoo Liner" => "175 Pesos"
"Lipgloss Lifter Gloss" => "209 Pesos"
"Labial Super Stay Matte Ink" => "140 Pesos"
"Color Sensational Lip Liner" => "80 Pesos"
"Express Brow Shaping Pencil" => "55 Pesos"
];

$maybelline = [
 $makeup,
 $precios
];

echo json_encode($maybelline);
?>