<?php

$diskContent = file_get_contents('./disk-list.json');
$diskList = json_decode($diskContent);


header("Content-Type: application/json");

echo json_encode($diskList);
