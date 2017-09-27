<?php

session_start();

$app = __DIR__;

require_once "{$app}/classes/ErrorHandler.php";
require_once "{$app}/classes/Validator.php";
require_once "{$app}/classes/Hash.php";
require_once "{$app}/classes/Database.php";
require_once "{$app}/classes/Auth.php";

$database = new Database;
$errorHandler = new ErrorHandler;
$hash = new Hash;


$auth = new Auth($database, $hash);