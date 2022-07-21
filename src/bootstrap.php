<?php
/*
| ---------------------------------------------------------------------------
| Bootstrap the application
|
| Here we pull in, define, and execute anything needed to run the app. Require
| this in any entry point script (index.php for example).
| ---------------------------------------------------------------------------
*/

require_once __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/functions.php';

// load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

