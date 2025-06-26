<?php

use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$title = 'Bootstrap OK';
$heading = 'Bootstrap OK';
$message = 'Your PHP autoloader and .env setup are working correctly.';
$appName = getenv('APP_NAME') ?: 'My Application';

$data = [
  'title'   => $title,
  'heading' => $heading,
  'message' => $message,
  'appName' => $appName,
];

extract($data);
include __DIR__ . '/../templates/landingPage.html';


