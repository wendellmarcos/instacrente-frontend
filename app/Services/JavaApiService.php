<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class JavaApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('JAVA_API_URL', 'http://localhost:8081/api');
    }

    public function getHelloMessage()
    {
        try {
            $response = Http::timeout(2)->get("{$this->baseUrl}/hello");
            if ($response->successful()) {
                return $response->json();
            }
            return ['message' => 'Erro ao comunicar com o Java: ' . $response->status()];
        } catch (\Exception $e) {
            return ['message' => 'Backend Java indisponível (Offline)'];
        }
    }

    public function getPosts()
    {
        try {
            $response = Http::timeout(2)->get("{$this->baseUrl}/posts");
            if ($response->successful()) {
                return $response->json();
            }
            return [];
        } catch (\Exception $e) {
            return [];
        }
    }
}
