<?php

$archivo = "visitas.txt";

$contador = 0;

$fp = fopen($archivo,"r");

$contador = fgets($fp, 10);

fclose($fp);

++$contador;

$fp = fopen($fp, $contador,"w+");

fwrite($fp, $contador, 10);

fclose($fp);

echo "$contador";

?>