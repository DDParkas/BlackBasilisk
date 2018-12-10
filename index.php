<?php
use Pinus\blackbasilisk\src\PageObject;
require_once "vendor/autoload.php";

$page = new PageObject();
var_dump($page->getPage("https://www.w3schools.com/html/html_tables.asp"));
