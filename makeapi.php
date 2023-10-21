<?php

header("Access-Control-Allow-Origin: *");
$curl = curl_init();

$params=["namee"=>"xyz","mno"=>1233,"email"=>"xyz@123","password"=>"xyz@mail.com"];

curl_setopt_array($curl,[
    CURLOPT_URL=>"http://localhost:8899/clients",
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_TIMEOUT=>30,
    CURLOPT_CUSTOMREQUEST=>"POST",
    CURLOPT_POSTFIELDS=>json_encode($params),
    CURLOPT_HTTPHEADER=>["Content-Type: application/json"]
]);

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    echo "cURL Error #:" . $err;
}else{
    echo $response;
}

curl_close($curl);
?>