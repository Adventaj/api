<?php
/**
 * Created by Yannick LALLEAU.
 * Date: 06/02/2017
 * Time: 15:11
 */

namespace AdventajApi\Ressources;

use GuzzleHttp\Client;

class Request
{

	protected $request = '';
	protected $requestMethod = '';
	protected $options = '';

	private $apiKey;

	public function __construct($apiKey='')
	{

		$this->apiKey = $apiKey;

		if(method_exists($this, 'initialize'))
			$this->initialize();

		if($this->request == '')
			throw new \Exception("Route is not defined");
		if($this->requestMethod == '')
			throw new \Exception("Request method is not defined");
		return true;
	}

	public function send(){

		$client = new Client([
			'base_uri' => 'http://api.adventaj.com'
		]);
		$requestMethod = 'GET';
		if($this->requestMethod == 'POST'){
			$requestMethod = 'POST';
		}
		$response = $client->request(
			$requestMethod,
			$this->request . '?apiKey=' . $this->apiKey,
			$this->options
		);
		if($response->getStatusCode() != 200)
			throw new \Exception('Error: '.$response->getReasonPhrase());
		return true;

	}



}