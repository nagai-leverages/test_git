<?php
// $value = var_dump($_POST['value']);
$test = $_POST['value'];
$value = $test;
echo json_encode(compact('value'));