<?php
/**
 * Created by Cédric Cousin.
 * Date: 07/02/2017
 * Time: 09:40
 */

namespace AdventajApi\Callback;


class Unsubscribe
{
  private $email = '';
  private $tags = [];
  private $messageId = '';

  public function __construct() {
		if(!isset($_Request['event']) || $_Request['event'] != 'unsubscribe')
			throw new \Exception('Initialize object variable for event');
  	if(isset($_Request['email']))
    	$this->email = $_Request['email'];
  	else
			throw new \Exception('Initialize object variable for email');
		if(isset($_Request['messageId']))
			$this->messageId = $_Request['messageId'];
		else
			throw new \Exception('Initialize object variable for messageId');
		if(isset($_Request['tags']) && is_array($_Request['tags']))
      $this->tags = $_Request['tags'];
    else
    	$this->tags = [];
  }

  public function getEmail() {
    return $this->email;
  }

  public function getMessageId() {
    return $this->messageId;
  }

  public function getTags() {
    return $this->tags;
  }


}