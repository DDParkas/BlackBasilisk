<?php
namespace Forseti\Iterator;

use Symfony\Component\DomCrawler\Crawler;

class Parser{

  private $crawler;

  public function __construct($html){

    $this->crawler = new Crawler();
    $this->crawler->addHtmlContent($html);

  }
  public function parserTableExempleHtml(){

    return $this->crawler->html();

  }
  public function getIterator(){

    return new Iterator($this->parserTableExempleHtml(), '//table[@id="customers"]/tr[position()>1]');

  }

}

 ?>
