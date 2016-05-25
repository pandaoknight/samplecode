<?php
var_dump(memory_get_usage());
$data = array(
    "aa,bb",
    "cc",
    "1234"
    );

$f = fopen("out.csv", "w");
fputcsv($f, $data);
var_dump(memory_get_usage());
fclose($f);
var_dump(memory_get_usage());
unset($data);
var_dump(memory_get_usage());
