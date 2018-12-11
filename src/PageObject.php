<?php

namespace Pinus\blackbasilisk\src;
use GuzzleHttp\Client;

class PageObject{

  private $client;

  public function __construct(){
    $this->client = new Client();
  }
  public function getPage($url){
    $page = $this->client->get($url);
    return new Parser($page->getBody()->getContents());
  }
}

 ?>
