<?php
/**
 * Created by Yannick LALLEAU.
 * Date: 06/02/2017
 * Time: 15:06
 */

namespace AdventajApi\Mail;

use AdventajApi\Ressources\Request;

class Send extends Request
{

	public function initialize()
	{
		$this->request = '/mail/send.html';
		$this->requestMethod = 'POST';
		$this->options = [
			'body' => '',
			'altbody' => '',
			'sender' => '',
			'sender_name' => '',
			'object' => '',
			'address' => '',
			'tags' => [],
		];
	}

	public function setBody($value)
	{
		$this->options['body'] = $value;
	}

	public function setAltBody($value)
	{
		$this->options['altbody'] = $value;
	}

	public function setSender($value)
	{
		$this->options['sender'] = $value;
	}

	public function setSenderName($value)
	{
		$this->options['sender_name'] = $value;
	}

	public function setObject($value)
	{
		$this->options['object'] = $value;
	}

	public function setAddress($value)
	{
		$this->options['address'] = $value;
	}

	public function addTag($value)
	{
		$this->options['tags'][] = $value;
	}

}