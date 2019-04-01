<?php

namespace Pinus\blackbasilisk\src\Parser;
use Symfony\Component\DomCrawler\Crawler;

Class Parser{

  private $crawler;
  public function __construct($html){

    $this->crawler = new Crawler();
    $this->crawler->addHtmlContent($html);

  }
  public function returnHTML(){

    return $this->crawler->html();

  }
  public function getXpathByText($xpath){

    return $this->crawler->filterXpath($xpath)->text();

  }
  public function getXpathByAttr($xpath, $attr){

    return $this->crawler->filterXpath($xpath)->attr($attr);

  }



}

