<?php

$command = escapeshellcmd('./python ./googleExcelRetrieveTest.py');
$output = shell_exec($command);
echo $output;

?>

