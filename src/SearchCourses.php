<?php

use Symfony\Component\DomCrawler\Crawler;
require 'vendor/autoload.php';

$client = new  \GuzzleHttp\Client();

$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao');

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$courses = $crawler->filter('span.card-curso__nome');

foreach ($courses as $course) {
    echo $course->textContent . PHP_EOL;
}