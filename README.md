# Black Basilisk

 Projeto de bot com captura por Xpath.
 
## Requerimentos:

- PHP >= 5.6
- Composer

## Funcionalidades:

- Busca campo da página conforme informado;

## Exemplo de uso:

```php
<?php
// Ultilixando a pagina index.php
use Pinus\blackbasilisk\src\PageObject;
use Pinus\blackbasilisk\src\Parser;
require_once "vendor/autoload.php";

$page = new PageObject();
// Captura palavara 'Tables' da pagina informada
var_dump($page->getPage("http://www.w3schools.com/html/html_tables.asp")->getXpath('//h1/span[@class="color_h1"]'));
```
## Tecnologias ultilizadas:

- [Composer v1.8.4](https://getcomposer.org/)
- [Guzzle HTTP v6.3](http://docs.guzzlephp.org/en/stable/)
- [Synfony DomCrawler v3.2](https://symfony.com/doc/current/components/dom_crawler.html)

## Blog:

- [Studio Pinus](https://studiopinus.com/black-basilisk/)