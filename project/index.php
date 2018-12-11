<?php

use Forseti\Iterator\PageObject;
use Forseti\Iterator\Parser;

require_once __DIR__ . "/vendor/autoload.php";


$pageObject = new PageObject();

 $variavel = $pageObject->getPage()->getIterator();
foreach ($variavel as $key) {
  var_dump($key);
}
