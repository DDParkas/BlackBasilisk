# Black Basilisk v1.0.0

 Projeto de bot com captura por Xpath.
 
 
## Requerimentos:

- PHP >= 5.6
- Composer

## Funcionalidades:

- Busca campo da página conforme informado;

## Exemplo de uso:

```php
<?php
// Utilizando a pagina index.php
use Pinus\blackbasilisk\src\PageObject;
use Pinus\blackbasilisk\src\Parser;
require_once "vendor/autoload.php";

$page = new PageObject();

$parser = $page->getPage('studiopinus.com');  // Faz a requisição na pagina

var_dump($parser->getXpathByAttr('//div[@class="readmore"]/a', 'href')); // Retorna o atributo
var_dump($parser->getXpathByText('//div[@class="readmore"]/a')); // Retorna o texto


```
## Frameworks utilizados:

- [Composer v1.8.4](https://getcomposer.org/)
- [Guzzle HTTP v6.3](http://docs.guzzlephp.org/en/stable/)
- [Synfony DomCrawler v3.2](https://symfony.com/doc/current/components/dom_crawler.html)

## Site:

- [Studio Pinus](https://studiopinus.com/black-basilisk/)