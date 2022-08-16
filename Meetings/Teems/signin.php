<?php
session_start();

require "vendor/autoload.php";
require "Config/TeamsConfig.php";

use myPHPnotes\Microsoft\Auth;

$config = new TeamsConfig();
$config = $config->getConfig();

$tenant = $config['tenant'];
$client_id = $config['client_id'];
$client_secret = $config['client_secret'];
$callback = $config['callback'];
$scopes = $config['scopes'];
$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);
header("location: " . $microsoft->getAuthUrl());
