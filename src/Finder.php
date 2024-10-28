<?php

namespace App\Finder;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Finder
{
    private ClientInterface $http_client;
    private Crawler $crawler;

    public function __construct(ClientInterface $http_client, Crawler $crawler)
    {
        $this->http_client = $http_client;
        $this->crawler = $crawler;
    }

    public function search($uri): array
    {
        $response = $this->http_client->request('GET', $uri);

        $html = $response->getBody();

        $this->crawler->addHtmlContent($html);

        $courses_elements = $this->crawler->filter('span.card-curso__nome');
        $courses  = [] ;

        foreach ($courses_elements as $course) {
            $courses[] = $course->textContent;
        }

        return $courses;
    }
}
