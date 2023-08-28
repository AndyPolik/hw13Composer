<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

try {
    $response = $client->get('https://google.com');
    echo "Status Code: " . $response->getStatusCode() . "\n";
    echo "Response Body: " . $response->getBody() . "\n";
} catch (RequestException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>