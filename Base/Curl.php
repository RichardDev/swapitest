<?php 
namespace Base;

class Curl implements ICurl
{	
	protected $curlresource;
	protected $url;
	protected $output;	
	
	public function __construct($url) 
	{
		$this->curlresource = $this->curl_init();
		$this->url = $url;
	}
	public function curl_init() 
	{
		return  $ch = curl_init(); 
	}
	
	public function curl_setopt()
	{
		curl_setopt($this->curlresource,CURLOPT_URL, $this->url);
		curl_setopt($this->curlresource, CURLOPT_RETURNTRANSFER, 1);
	}
	
	public function getOutput()
	{
		return $this->output = curl_exec($this->curlresource);
	}
	
	public function curl_close()
	{	
		return curl_close($this->curlresource);
	}
	
	public function convertSWAPIJSonResponse($BoAssoc = null)
	{
		return json_decode($this->output, $BoAssoc);
	}
}