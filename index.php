#!/usr/bin/env php
<?php
include "autoloader.php";
use core\core;

$app = new core();
$app->run($argc, $argv[1]);

