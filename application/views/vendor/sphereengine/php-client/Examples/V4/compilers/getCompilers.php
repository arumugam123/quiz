<?php
/**
 * Example presents usage of the successful getCompilers() API method
*/

use SphereEngine\Api\CompilersClientV4;

// require library
require_once('../../../vendor/autoload.php');

// define access parameters
$accessToken = '<access_token>';
$endpoint = '<endpoint>';

// initialization
$client = new CompilersClientV4($accessToken, $endpoint);

// API usage
$response = $client->getCompilers();
