<?php

// Include Libraries
include_once 'vendor/autoload.php';
include_once 'vendor/abraham/twitteroauth/autoload.php';
// Include_once 'vendor/educoder/pest/Pest.php';

use Abraham\TwitterOAuth\TwitterOAuth;

// Include Twig
$loader = new Twig_Loader_Filesystem('theme');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());

// Keys and tokens
$consumer_key = "RSTOkcG046fgjraZjBtiils7a";
$consume_secret = "uzmObEAYiqvy8pSA6h1SFC9AEc0HBlSh8fTm3dtMKehVZFT7aF";
$access_token = "872729667777810529-77MqnqNXQNGvu1I0qFy9gYPKymbbibk";
$access_token_secret = "lhdd6fB1mEbvY3Q3tRp3GIQWaL8Ez1R5mFnoLT0OELNY7";

// Connect to API
$connection = new TwitterOAuth($consumer_key, $consume_secret, $access_token, $access_token_secret);
