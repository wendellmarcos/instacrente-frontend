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
        $message = $this->javaApiService->getHelloMessage();
        $posts = $this->javaApiService->getPosts();
        return view('welcome', ['message' => $message, 'posts' => $posts]);
    }
}
