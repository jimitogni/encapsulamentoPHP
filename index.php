<?php
require_once 'ControleRemoto.class.php';
$controle = new ControleRemoto();

$controle->abrirMenu();
echo "<br><br> Ligando a TV<br>";
$controle->ligar();
$controle->play();
$controle->abrirMenu();

echo "<br><br> Aumentando o volume<br>";
$controle->maisVolume();
$controle->abrirMenu();
$controle->maisVolume();
$controle->abrirMenu();

echo "<br><br> Colocando no mudo<br>";
$controle->ligarMudo();
$controle->abrirMenu();

echo "<br><br> Desligar mudo<br>";
$controle->desligarMudo();
$controle->abrirMenu();

echo "<br><br> Play e pause<br>";
$controle->pause();
$controle->abrirMenu();
$controle->play();
$controle->abrirMenu();

echo "<br><br>Desligando<br>";
$controle->desligar();
$controle->abrirMenu();

?>