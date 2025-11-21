@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden">
    <!-- Abstract Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-blood-600 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-[-10%] right-[-10%] w-96 h-96 bg-red-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-blood-800 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl drop-shadow-lg">
                        <span class="block xl:inline">Conectando você</span>
                        <span class="block text-blood-500 xl:inline">com propósito eterno</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-200 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 font-light">
                        Uma rede social edificada na rocha. Segura, transparente e livre de ruídos. Compartilhe sua fé, faça amigos e cresça espiritualmente em um ambiente consagrado.
                    </p>
                    <div class="mt-8 sm:mt-10 sm:flex sm:justify-center lg:justify-start gap-4">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center btn-blood">
                                Começar Agora
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0">
                            <a href="#" class="w-full flex items-center justify-center btn-glass">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <!-- Hero Image/Illustration -->
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 flex items-center justify-center pointer-events-none">
        <!-- Placeholder for a spiritual/connection image, using a glass card effect instead of a raw image -->
        <div class="glass-card m-8 w-3/4 h-3/4 flex items-center justify-center text-center">
             <div class="text-white/80">
                <svg class="w-32 h-32 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                <p class="text-xl font-serif italic">"Onde o amor de Cristo nos une."</p>
             </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-12 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blood-500 font-semibold tracking-wide uppercase">Diferenciais</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                Por que escolher o Instacrente?
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-300 lg:mx-auto">
                Construído para ser luz no mundo digital.
            </p>
        </div>

        <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                <!-- Feature 1 -->
                <div class="glass-card hover:bg-white/10 transition duration-300">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blood-700 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Comunidade Global</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-300">
                        Conecte-se com cristãos de todo o mundo e compartilhe experiências edificantes.
                    </dd>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card hover:bg-white/10 transition duration-300">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blood-700 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Conteúdo Seguro</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-300">
                        Moderação ativa para garantir um ambiente livre de conteúdo impróprio.
                    </dd>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card hover:bg-white/10 transition duration-300">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blood-700 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Rápido e Leve</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-300">
                        Uma experiência fluida e otimizada para todos os dispositivos.
                    </dd>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card hover:bg-white/10 transition duration-300">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blood-700 text-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Interatividade</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-300">
                        Comente, curta e compartilhe momentos especiais com seus amigos.
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection
