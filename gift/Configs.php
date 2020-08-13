<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseSessionStorage;

session_start();

try {
    ParseClient::initialize('Q3hDXQER2jgODBUEe9LmnyVFhvUjWZ733DflpTRu', null, 'VEoV8MKPKp6Dmxyq8gVpo8Eqp11pcbzpRgqlSCP5');
    ParseClient::setServerURL('http://176.9.239.88:5567/','/');
    ParseClient::setStorage( new ParseSessionStorage());
} catch (Exception $e) {
}

$health = ParseClient::getServerHealth();
if($health['status'] !== 200) {

}

// Website root url
$GLOBALS['WEBSITE_PATH'] = 'http://jasminchat2.github.io/';