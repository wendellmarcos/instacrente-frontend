<?php

namespace App\Http\Controllers;

use App\Services\JavaApiService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $javaApiService;

    public function __construct(JavaApiService $javaApiService)
    {
        $this->javaApiService = $javaApiService;
    }

    public function index()
    {
        $data = $this->javaApiService->getHelloMessage();
        return view('welcome', ['message' => $data['message'] ?? 'Sem mensagem']);
    }
}
