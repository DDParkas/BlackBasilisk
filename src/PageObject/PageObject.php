<?php

namespace Pinus\blackbasilisk\src\PageObject;

use GuzzleHttp\Client;
use Pinus\blackbasilisk\src\Parser\Parser;

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

