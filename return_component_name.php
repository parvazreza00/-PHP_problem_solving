<?php
// Return some components of an url

$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';


$url = parse_url($url);

echo "Scheme : " . $url['scheme']."\n";

echo "Host : " . $url['host'] . "\n";

echo "Path : " . $url['path'] . "\n";


?>