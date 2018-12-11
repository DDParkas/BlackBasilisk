<?php
namespace Forseti\Iterator;

use GuzzleHttp\Client;

class PageObject{

  private $client;

  public function __construct(){

    $this->client = new Client();

  }

  public function getPage(){

    $page = $this->client->get("https://www.w3schools.com/html/html_tables.asp");
    return new Parser($page->getBody()->getContents());

  }
}
