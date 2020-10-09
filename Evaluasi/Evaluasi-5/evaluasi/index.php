<?php
    require_once __DIR__ . "/vendor/autoload.php";

    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
        'form_params'=>[
            'email'=>'adian281r@gmail.com',
            'password'=>'azka9871'
        ]
    ]);
    // echo $response->getStatusCode(); // 200
    // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    // echo "<br>";

    $json = $response->getBody();

    $arr = json_decode($json, true);
    echo $arr["token"];
    $token = $arr["token"];
    $response = $client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=85', [
        'headers' => [
            'Authorization' : bearer . $token
        ]
    ]);
    
    
?>
