<?php

// Function to get a new token.
function currentToken() {
	// Setup cURL.
	$ch = curl_init('https://api.chartmetric.com/api/token');
	curl_setopt_array($ch, array(
		CURLOPT_POST => TRUE,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		CURLOPT_POSTFIELDS => json_encode(array(
			'refreshtoken' => 'SbfZLFnHhK2m2PWSzYgShdYhLHJOj9xJ0iJX2HvKoL44Ng95vggZA2NELGtcxrPG'
		))
	));

	// Send the request.
	$response = curl_exec($ch);

	// Check the response.
	if($response === FALSE){
		die(curl_error($ch));
	}

	// Decode the response.
	$responseData = json_decode($response, TRUE);

	// Return the token.
	return $responseData['token'];
}

$newToken = currentToken();

// Function to fetch chart data
function getChart($newToken) {
	// Setup cURL
	$ch = curl_init('https://api.chartmetric.com/api/artist/list/filter?limit=100&sortOrderDesc=false');
	curl_setopt_array($ch, array(
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer ' . $newToken,
		),
	));

	// Send the request
	$response = curl_exec($ch);

	// Check the response
	if ($response === FALSE) {
		die(curl_error($ch));
	}

	// Decode the response
	$responseData = json_decode($response, TRUE);

	return $responseData;
}

$chartData = getChart($newToken);


$file = './chartmetric.json';

// Write chart data to file 
file_put_contents($file, json_encode($chartData, JSON_PRETTY_PRINT));

?>