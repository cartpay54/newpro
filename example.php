<?php
$iop='179.43.176.2';
echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$iop)));
?>
