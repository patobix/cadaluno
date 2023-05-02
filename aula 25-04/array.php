<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Arrays Ordenadas</h1>

<?php
$listaordenada = array('carro', 'bike', 'moto');
echo '<prev>';
print_r($listaordenada);
echo '</prev>';


$listaordenada[]= 'aviao';
echo '<pre>';
print_r ($listaordenada);
echo '</pre>';


$listaordenada[] = 'triciclo';
$listaordenada[] = 'rolima';
$listaordenada[] = 'canoa';
$listaordenada[] = 'aviador';
echo '<pre>';
print_r ($listaordenada);
echo '<pre>';


$listaordenada[1]= 'chuveiro';
echo '<pre>';
print_r ($listaordenada);
echo '</pre>';

echo '<h1> Array multidimensional - com multiplos arrays<h1>'






?>

</body>
</html>
