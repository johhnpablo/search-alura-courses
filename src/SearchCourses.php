<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use App\Finder\Finder;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$finder = new Finder($client, $crawler);
$courses = $finder->search('/cursos-online-programacao/');

foreach ($courses as $course) {
    echo $course . PHP_EOL;
}