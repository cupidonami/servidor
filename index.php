<?php>

echo "Marcas de maquillaje por Keren Gastelum";

$makeup = array('Blush', 'labial', 'lipgloss', 'lapizlabial', 'primer');
$PRECIO = array (160.20, 110.50, 99.99, 57.80, 172.99);

$maybelline = $makeup + $PRECIO;


echo json_encode($maybelline);
?>