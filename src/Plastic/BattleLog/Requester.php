<?php
namespace Plastic\BattleLog;

class Requester
{
	public $curl;
	protected $url;
	protected $result;
	
	public function __construct($url)
	{
		if (!extension_loaded('curl')) {
			throw new \ErrorException('cURL library is not loaded');
		}
		
		$this->url = $url;
		return $this->makeRequest();
	}
	
	public function makeRequest()
	{
		$this->curl = curl_init();
		
		curl_setopt($this->curl, CURLOPT_URL, $this->url);
		curl_setopt($this->curl, CURLOPT_HEADER, false);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
		
		$this->result = curl_exec($this->curl);
		$error = curl_errno($this->curl);
		
		$this->close();
		
		if (!$error) {
			return true;
		}
		
		return $error;
	}
	
	public function close()
	{
		if (is_resource($this->curl)) {
			curl_close($this->curl);
		}
	}

	public function __destruct()
	{
		$this->close();
	}
	
	public function getResult()
	{
		return $this->result;
	}
}