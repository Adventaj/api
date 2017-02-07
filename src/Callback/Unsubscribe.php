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

  public function __construct($email='', $tags=[], $messageId='') {
    $this->email = $email;
    $this->messageId = $messageId;
    if (!is_array($tags)) {
      $tags = [$tags];
    }
    $this->tags = $tags;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getMessageId() {
    return $this->messageId;
  }

  public function setMessageId($messageId) {
    $this->messageId = $messageId;
  }

  public function getTags() {
    return $this->tags;
  }

  public function addTag($tag) {
    $this->tags[] = $tag;
  }
}