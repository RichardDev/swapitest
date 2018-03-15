<?php 
/**
 * 
 * @return array
 */
require_once 'config.php';
function getStarWarsRootInfo()
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/");
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

function getStarWarsResource($Url, $ID) {
	$ch = curl_init();	
	curl_setopt($ch, CURLOPT_URL, $Url."".$ID."/");
	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// $output contains the output string
	$output = curl_exec($ch);
	
	$StarWarsResult = json_decode($output, true);
	
	// close curl resource to free up system resources
	curl_close($ch);
	return $StarWarsResult;
}


/**
 * TODO
 * @param Integer $ItTotal
 * @param Integer $ItPage
 */
function Paginacao($ItTotal, $ItPage)
{	
	$ItTotalPages = $ItTotal /5;
	
	if ($ItPage > 0)
	{
		
	}
}
