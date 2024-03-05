<?php

$maquillaje = [
    "crema" => "Crema de noche"
"Base" => "DIOR FOREVER SKIN GLOW"
"primer" => "Backstage Face & Body"
"labial" => "Addict Lip Maximizer 040 Intense Blueberry"
"mascara de pestañas" => "DIORSHOW, MÁSCARA DE PESTAÑAS"
"Delineador" => "DIORSHOW ON STAGE LINER"
"corrector" => "DIOR FOREVER SKIN CORRECT"
"Lip Liner" => "ROUGE DIOR CONTOUR"
"Lapiz de Cejas" => "DIORSHOW"
"gloss" => "Maximizador de labios Addict"
];

$precios = [
"crema crema de noche" => "1000 pesos"
"Base DIOR FOREVER SKIN GLOW" => "850 pesos"
"primer Backstage Face & Body" => "950 pesos"
"labial Addict Lip Maximizer 040 Intense Blueberry" => "680 pesos"
"mascara de pestañas DIORSHOW, MÁSCARA DE PESTAÑAS" => "970 pesos"
"Delineador DIORSHOW ON STAGE LINER" => "890 pesos"
"corrector DIOR FOREVER SKIN CORRECT" => "980 pesos"
"Lip Liner ROUGE DIOR CONTOUR" => "1020 pesos"
"Lapiz de Cejas DIORSHOW" => "970 pesos"
"gloss Maximizador de labios Addict" => "1050 pesos"
];

$DIOR = [
 $maquillaje,
 $precios
];

echo json_encode($DIOR);
?>