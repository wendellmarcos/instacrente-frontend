<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class JavaApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'http://localhost:8080/api';
    }

    public function getHelloMessage()
    {
        try {
            $response = Http::get("{$this->baseUrl}/hello");
            if ($response->successful()) {
                return $response->json();
            }
            return ['message' => 'Erro ao comunicar com o Java: ' . $response->status()];
        } catch (\Exception $e) {
            return ['message' => 'Erro de conexão com o Java: ' . $e->getMessage()];
        }
    }
}
