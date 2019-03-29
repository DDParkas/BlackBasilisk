<?php
use Pinus\blackbasilisk\src\PageObject;
use Pinus\blackbasilisk\src\Parser;
require_once "vendor/autoload.php";

$page = new PageObject();
var_dump($page->getPage("http://www.w3schools.com/html/html_tables.asp")->getXpath('//h1/span[@class="color_h1"]'));
