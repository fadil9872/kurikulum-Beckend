<?php
    require_once __DIR__ . "/vendor/autoload.php";

    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
        'form_params'=>[
            'email'=>'adian281r@gmail.com',
            'password'=>'azka9871'
        ]
    ]);
    echo $response->getStatusCode(); // 200
    echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    echo "<br>";

    $json = '{"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnBvbmRva3Byb2dyYW1tZXIuY29tXC9hcGlcL3N0dWRlbnRfbG9naW4iLCJpYXQiOjE2MDIyMjc1NjcsImV4cCI6MTYwMjIzMTE2NywibmJmIjoxNjAyMjI3NTY3LCJqdGkiOiI1Mlg3RkxaTGZoZ1VkcEttIiwic3ViIjoxNTcsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.zN8Zln-gDYAYTftG2vbV0PtVdjHxheYcSR05UhrXIjI"}';

    $arr = json_decode($json, true);
    echo $arr["token"];
    $token = $arr["token"];
    $response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
        'on_headers' => function (ResponseInterface $response) {
        }
    ]);
    
    
?>