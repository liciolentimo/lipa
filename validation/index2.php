<?php
$data = file_get_contents('php://input');

$handle = fopen('validation.txt', 'w');

fwrite($handle, $data);

?>