<?php
use Pinus\blackbasilisk\src\PageObject\PageObject;
use Pinus\blackbasilisk\src\Parser\Parser;
require_once "vendor/autoload.php";

$page = new PageObject();

$parser = $page->getPage('studiopinus.com');  // Faz a requisição na pagina

var_dump($parser->getXpathByAttr('//div[@class="readmore"]/a', 'href')); // Retorna o atributo
var_dump($parser->getXpathByText('//div[@class="readmore"]/a')); // Retorna o texto




