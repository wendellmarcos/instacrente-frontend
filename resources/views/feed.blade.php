@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50/50 py-12">
    <div class="container-wide">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Sidebar (Profile/Menu) -->
            <div class="hidden lg:block lg:col-span-3 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 text-center sticky top-24">
                    <div class="relative w-24 h-24 mx-auto mb-4">
                        <div class="absolute inset-0 bg-gradient-to-tr from-crimson-500 to-gold-400 rounded-full blur-sm opacity-50"></div>
                        <img src="https://ui-avatars.com/api/?name=Usuario+Teste&background=random" alt="User" class="w-full h-full object-cover rounded-full border-4 border-white relative z-10">
                    </div>
                    <h2 class="font-bold text-gray-900 text-lg font-display">Usuário Teste</h2>
                    <p class="text-sm text-gray-500 mb-6">@usuarioteste</p>
                    
                    <div class="flex justify-center space-x-6 text-sm border-t border-gray-50 pt-6">
                        <div class="text-center group cursor-pointer">
                            <span class="block font-bold text-xl text-gray-900 group-hover:text-crimson-600 transition-colors">120</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Seguindo</span>
                        </div>
                        <div class="text-center group cursor-pointer">
                            <span class="block font-bold text-xl text-gray-900 group-hover:text-crimson-600 transition-colors">350</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Seguidores</span>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Links -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden sticky top-[22rem]">
                    <nav class="p-2 space-y-1">
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-crimson-700 bg-crimson-50 rounded-xl font-medium transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            <span>Feed Principal</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-crimson-600 rounded-xl transition-all group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="font-medium">Grupos de Oração</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-crimson-600 rounded-xl transition-all group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="font-medium">Notificações</span>
                            <span class="ml-auto bg-crimson-100 text-crimson-600 text-xs font-bold px-2 py-0.5 rounded-full">3</span>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Feed Area -->
            <div class="col-span-1 lg:col-span-6">
                @php
                    $posts = [
                        [
                            'id' => 1,
                            'author' => 'Pastor Carlos',
                            'avatar' => 'https://ui-avatars.com/api/?name=Pastor+Carlos&background=random',
                            'time' => '2 horas atrás',
                            'location' => 'Igreja Central',
                            'content' => 'Culto abençoado hoje! A palavra sobre fé e perseverança tocou muitos corações. 🙏✨ #Fé #Gratidão',
                            'image' => 'https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                            'likes' => 124,
                            'comments' => 45
                        ],
                        [
                            'id' => 2,
                            'author' => 'Ana Souza',
                            'avatar' => 'https://ui-avatars.com/api/?name=Ana+Souza&background=random',
                            'time' => '5 horas atrás',
                            'location' => 'São Paulo',
                            'content' => 'Bom dia irmãos! Que a paz do Senhor esteja com todos vocês nesta semana que se inicia.',
                            'likes' => 89,
                            'comments' => 12
                        ],
                        [
                            'id' => 3,
                            'author' => 'Grupo de Jovens',
                            'avatar' => 'https://ui-avatars.com/api/?name=Jovens&background=random',
                            'time' => '1 dia atrás',
                            'location' => 'Acampamento de Verão',
                            'content' => 'Preparativos a todo vapor para nosso retiro! Quem vai? 🙌⛺️',
                            'image' => 'https://images.unsplash.com/photo-1478131143081-80f7f84ca84d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                            'likes' => 256,
                            'comments' => 89
                        ]
                    ];
                @endphp
                <x-feed :posts="$posts" />
            </div>

            <!-- Right Sidebar (Suggestions/Trending) -->
            <div class="hidden lg:block lg:col-span-3 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-24">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-bold text-gray-900 font-display">Sugestões</h3>
                        <a href="#" class="text-xs font-bold text-crimson-600 hover:underline">Ver tudo</a>
                    </div>
                    <div class="space-y-5">
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full overflow-hidden border border-gray-100">
                                    <img src="https://ui-avatars.com/api/?name=Lucas+Mendes&background=random" alt="User" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="font-bold text-sm text-gray-900 group-hover:text-crimson-600 transition-colors">Lucas Mendes</div>
                                    <div class="text-xs text-gray-500">Amigo em comum</div>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-crimson-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full overflow-hidden border border-gray-100">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Lima&background=random" alt="User" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="font-bold text-sm text-gray-900 group-hover:text-crimson-600 transition-colors">Sarah Lima</div>
                                    <div class="text-xs text-gray-500">Novo membro</div>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-crimson-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl shadow-lg p-6 text-white relative overflow-hidden sticky top-[20rem]">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-white opacity-10 rounded-full blur-xl"></div>
                    <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-20 h-20 bg-blue-400 opacity-20 rounded-full blur-xl"></div>
                    
                    <h3 class="font-bold text-lg mb-4 font-display relative z-10">Versículo do Dia</h3>
                    <div class="relative z-10">
                        <svg class="w-8 h-8 text-blue-300 mb-2 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21L14.017 18C14.017 16.8954 13.1216 16 12.017 16H9.01703C7.91246 16 7.01703 16.8954 7.01703 18V21H4.01703V12H1.01703V21C1.01703 22.6569 2.36017 24 4.01703 24H19.017C20.6739 24 22.017 22.6569 22.017 21V12H19.017V21H16.017V18C16.017 16.8954 15.1216 16 14.017 16H11.017C9.91246 16 9.01703 16.8954 9.01703 18V21H14.017Z" />
                        </svg>
                        <p class="text-blue-50 text-lg italic mb-4 font-display leading-relaxed">"O Senhor é o meu pastor; nada me faltará."</p>
                        <p class="text-sm text-blue-200 font-bold text-right tracking-wider">- SALMOS 23:1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
