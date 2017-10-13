<?php
extract($_GET);
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($name));
readfile($name);
?>