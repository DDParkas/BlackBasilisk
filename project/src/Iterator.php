<?php
namespace Forseti\Iterator;

use Symfony\Component\DomCrawler\Crawler;

class Iterator implements \Countable, \Iterator{

    private $crawler;
    private $iterator;

    public function __construct($html, $xpath){

      $this->crawler = new Crawler();
      $this->crawler->addHtmlContent($html);
      $this->iterator = $this->crawler->filterXPath($xpath)->getIterator();

    }

      public function current(){

        $element = $this->iterator->current();
        $company = $element->getElementsByTagName('td')->item(0)->textContent;
        $contact = $element->getElementsByTagName('td')->item(1)->textContent;
        $country = $element->getElementsByTagName('td')->item(2)->textContent;
        return [
          'company' => $company,
          'contact' => $contact,
          'country' => $country
        ];

      }
      public function next()
      {
          $this->iterator->next();
      }

      public function key()
      {
          return $this->iterator->key();
      }

      public function valid()
      {
          return $this->iterator->valid();
      }

      public function rewind()
      {
          $this->iterator->rewind();
      }

      public function count()
      {
          return $this->iterator->count();
      }

}


 ?>
