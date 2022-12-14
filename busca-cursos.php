<?php

use GuzzleHttp\Client;
use OliveiraJulia\AulaComposer\Buscador;
use Symfony\Component\DomCrawler\Crawler;

require "vendor\autoload.php";


$client = new Client(['base_uri' => 'https://www.alura.com.br/', "verify"=> false]);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    exibeMensagem($curso);
}
