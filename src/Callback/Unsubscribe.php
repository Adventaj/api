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
		if(!isset($_REQUEST['event']) || $_REQUEST['event'] != 'unsubscribe')
			throw new \Exception('Initialize object variable for event');
  	if(isset($_REQUEST['email']))
    	$this->email = $_REQUEST['email'];
  	else
			throw new \Exception('Initialize object variable for email');
		if(isset($_REQUEST['messageId']))
			$this->messageId = $_REQUEST['messageId'];
		else
			throw new \Exception('Initialize object variable for messageId');
		if(isset($_REQUEST['tags']) && is_array($_REQUEST['tags']))
      $this->tags = $_REQUEST['tags'];
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