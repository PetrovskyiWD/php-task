<?php

  include_once 'config.php';

  // Using the Twitter Search API
  $tweets = $connection->get("search/tweets", array("q" => @$_POST['searchword'], "count" => 10));

  // Load and echo main template
  $template = $twig->loadTemplate('main.html');
  echo $template->render(array('searchword' => @$_POST['searchword'], 'tweets' => $tweets));

?>
