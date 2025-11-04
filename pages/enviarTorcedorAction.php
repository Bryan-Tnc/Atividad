<?php

echo "<h1> Dados Enviados </h1>";
echo "===========================================================";

echo "<p>Torcedor:" . $_POST['nome_torcedor'] . "</p>";
//echo "<p>Torcedor: " {$_POST['nome']} "</p>";
echo "<p>cpf: " . $_POST['cpf'] . "</p>";
echo "<p>Frequenta o estadio: " . $_POST ['frequencia'] . "</p>";
echo "<p>É sócio torcedor? " . $_POST ['Socio_torcedor'] . "</p>";
echo "<p>Possui camisa oficial do time? " . $_POST ['Camisa'] . "</p>";
echo "<p>Qual o tamanho da camisa do clube? " . $_POST ['tamanho'] . "</p>";
echo "<p>Time do coração: " . $_POST ['time'] . "</p>";

//var_dump (value: $_POST['nome']);
//var_dump (value: $_GET['nome']);

?>