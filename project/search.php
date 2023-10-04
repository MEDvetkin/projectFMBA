<?php
class SearchEngine
{
public function __construct()
{
$this->apiUrl = 'http://api.example.com/jobs';
}

public function query(string $query, int $page = 1, int $perPage = 10): array
{
    $url = "{$this->apiUrl}?q={$query}&page={$page}&per_page={$perPage}";
    $options = [
        'http' => [
            'method' => 'GET',
            'header' => ['Content-Type' => 'application/json'],
            'timeout' => 5
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    return json_decode($response);
}
}