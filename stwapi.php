<?php 
	
function getStarWarsPlanetIfo($IDPlanet)
{
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/planets/".$IDPlanet."/");
	#curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/planets/");
	
	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// $output contains the output string
	$output = curl_exec($ch);
	
	$StarWarsResult = json_decode($output, true);
	
	// close curl resource to free up system resources
	curl_close($ch);
	return $StarWarsResult;
}