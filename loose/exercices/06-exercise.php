<?php

$fileName = 'test.txt';

$file = fopen($fileName, 'r');
$firstLine = fgets($file);
fclose($file);
echo $firstLine;

$newPhrase = "\nPHP is awesome\n";
$file = fopen($fileName, 'a');
fwrite($file, $newPhrase);
fclose($file);


$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));