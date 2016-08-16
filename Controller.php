<?php

include_once 'models/Repository';
$repository = new Repository();

$start = json_decode(file_get_contents('php://input'), true)['call'];
$repository::$start();
