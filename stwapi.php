<?php 
/**
 * 
 * @return array
 */
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
/**
 * 
 * @return array
 */
function getStarWarsPeople()
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/people/");

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
 * 
 * @param Integer $IDPeople
 * @return array
 */
function getStarWarsPeopleInfo($IDPeople)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/people/".$IDPeople."/");	

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
 * 
 * @param Integer $IDFilm
 * @return array
 */
function getStarWarsFilmInfo($IDFilm)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/films/".$IDFilm."/");

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
 * 
 * @param Integer $IDStarship
 * @return array
 */
function getStarWarsStarShipInfo($IDStarship)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/starships/".$IDStarship."/");

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
 * 
 * @param Integer $IDVehicle
 * @return array
 */
function getStarWarsVehiclesInfo($IDVehicle)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/vehicles/".$IDVehicle."/");

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
 * 
 * @param Integer $IDSpecie
 * @return array
 */
function getStarWarsSpeciesInfo($IDSpecie)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://swapi.co/api/species/".$IDSpecie."/");

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
 * 
 * @param Integer $IDPlanet
 * @return array
 */
function getStarWarsPlanetInfo($IDPlanet)
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
