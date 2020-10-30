<?php
/**
 * 
 */
class Clinica
{
	
	public function especialidade()
	{
		$cURLConnection = curl_init();

		curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.feegow.com/v1/api/specialties/list');
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'x-access-token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38'
		));

		$list = curl_exec($cURLConnection);
		curl_close($cURLConnection);

		$resp=json_decode($list,true);

		return $resp["content"];
	}

	public function profissional($post='')
	{
		$postRequest = array(
		    'especialidade_id' => $post['especialidade_id']
		);
		$cURLConnection = curl_init();

		curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.feegow.com/v1/api/professional/list');
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);

		curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'x-access-token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38'
		));

		$list = curl_exec($cURLConnection);
		curl_close($cURLConnection);

		$resp=json_decode($list,true);

		return $resp["content"];
	}
}


?>