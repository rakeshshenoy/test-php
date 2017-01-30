<?php

//echo "Hello!";
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://westus.api.cognitive.microsoft.com/face/v1.0/verify');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => 'dd51642516ac431a9c593b4c78b8a806'
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

$obj = new stdClass();
$obj->faceId1 = "fb7fa7f9-7a7b-484c-b7db-0593b3747cfb";
$obj->faceId2 = "706a8182-18c0-4575-93ca-76b2adabe35f";

// Request body
/*$request->setBody('{
    "faceId1":"fb7fa7f9-7a7b-484c-b7db-0593b3747cfb",
    "faceId2":"706a8182-18c0-4575-93ca-76b2adabe35f"
}');*/

$request->setBody(json_encode($obj));

try
{
    $response = $request->send();
    var_dump($response->getBody());
}
catch (HttpException $ex)
{
    echo $ex;
}

?>