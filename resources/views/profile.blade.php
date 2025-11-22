@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50/50 py-12">
    <div class="container-narrow">
        <!-- Profile Header -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
            <div class="h-32 bg-gradient-to-r from-crimson-600 to-gold-500"></div>
            <div class="px-8 pb-8">
                <div class="relative flex justify-between items-end -mt-12 mb-6">
                    <div class="relative">
                        <div class="w-24 h-24 bg-white rounded-full p-1 shadow-lg">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random&size=128" 
                                 alt="{{ $user->name }}" 
                                 class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                    <button class="btn-secondary text-sm px-4 py-2">Editar Perfil</button>
                </div>
                
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 font-display">{{ $user->name }}</h1>
                    <p class="text-gray-500">@ {{ strtolower(str_replace(' ', '', $user->name)) }}</p>
                    <p class="text-gray-600 mt-4 max-w-lg">
                        Membro da comunidade Instacrente. Compartilhando fé e esperança.
                    </p>
                    
                    <div class="flex space-x-6 mt-6 pt-6 border-t border-gray-50">
                        <div class="text-center">
                            <span class="block font-bold text-xl text-gray-900">0</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Publicações</span>
                        </div>
                        <div class="text-center">
                            <span class="block font-bold text-xl text-gray-900">0</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Seguidores</span>
                        </div>
                        <div class="text-center">
                            <span class="block font-bold text-xl text-gray-900">0</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Seguindo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Posts -->
        <div class="space-y-6">
            <h2 class="font-bold text-xl text-gray-900 font-display">Publicações</h2>
            
            @forelse($posts as $post)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random" 
                             alt="{{ $user->name }}" 
                             class="w-10 h-10 rounded-full">
                        <div>
                            <div class="font-bold text-gray-900">{{ $user->name }}</div>
                            <div class="text-xs text-gray-500">{{ $post['created_at']->diffForHumans() }}</div>
                        </div>
                    </div>
                    <p class="text-gray-800 leading-relaxed mb-4">
                        {{ $post['content'] }}
                    </p>
                    <div class="flex items-center space-x-6 text-gray-500 text-sm border-t border-gray-50 pt-4">
                        <button class="flex items-center space-x-2 hover:text-crimson-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <span>{{ $post['likes'] }}</span>
                        </button>
                        <button class="flex items-center space-x-2 hover:text-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            <span>{{ $post['comments'] }}</span>
                        </button>
                    </div>
                </div>
            @empty
                <div class="text-center py-12 bg-white rounded-2xl border border-gray-100 border-dashed">
                    <p class="text-gray-500">Nenhuma publicação ainda.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
