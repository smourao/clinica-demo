<?php

$postRequest = array(
    'CAMPOAINSERIR' => 'XXXXXXX',
    'CAMPOAINSERIR' => 'XXXXXXX'
);

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.feegow.com/v1/api/professional/list');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
//MÉTODO POST - curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);

curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'x-access-token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38'
));

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$resp=json_decode($phoneList,true);

foreach( $resp["content"] as $v){
    
    echo $v["nome"].'-'.$v['tratamento'].'-'.$v['rqe'].'-'.$v['conselho'].'-'.$v['documento_conselho'].'-'.$v['uf_conselho'].'-'.$v['foto'].'-'.$v['sexo'];
    foreach($v["especialidades"] as $espc){
    	echo $espc["nome_especialidade"].'<br>';
    }

}

var_dump($resp);


?>