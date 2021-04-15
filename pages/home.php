<?php
namespace App;
$db = new Database('website');
$data = $db->query('SELECT * FROM articles');
var_dump($data);