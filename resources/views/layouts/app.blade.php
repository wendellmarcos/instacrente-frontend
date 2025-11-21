<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Instacrente - Rede social cristã segura e edificante">

    <title>{{ config('app.name', 'Instacrente') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <!-- Navbar -->
    <nav class="navbar fixed top-0 left-0 right-0 z-50">
        <div class="container-wide">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                    <div class="relative w-12 h-12 bg-gradient-to-br from-crimson-600 via-blood-500 to-crimson-700 flex items-center justify-center rounded-2xl shadow-glow backdrop-blur-xl transition-all duration-500 group-hover:shadow-glow-lg group-hover:scale-110 group-hover:rotate-3">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-2xl"></div>
                        <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round">
                            <path d="M12 2v20M5 9h14"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-crimson-700 via-blood-600 to-crimson-800 bg-clip-text text-transparent">Instacrente</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="link-subtle">Início</a>
                    <a href="#sobre" class="link-subtle">Sobre</a>
                    <a href="#" class="link-subtle">Recursos</a>
                    <a href="#" class="link-subtle">Contato</a>
                </div>

                <!-- Desktop Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <span class="text-sm text-gray-700 font-medium">Olá, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="link-subtle">Sair</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="link-subtle">Entrar</a>
                        <a href="{{ route('register') }}" class="btn-primary">Criar Conta</a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button data-mobile-menu-toggle class="md:hidden p-2" aria-label="Menu">
                    <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div data-mobile-menu class="hidden md:hidden border-t border-crimson-100/30 bg-white/80 backdrop-blur-3xl shadow-glass">
            <div class="container-wide py-6 space-y-4">
                <a href="{{ url('/') }}" class="block py-2 link-subtle">Início</a>
                <a href="#sobre" class="block py-2 link-subtle">Sobre</a>
                <a href="#" class="block py-2 link-subtle">Recursos</a>
                <a href="#" class="block py-2 link-subtle">Contato</a>
                <div class="pt-4 border-t border-crimson-100/40 space-y-3">
                    @auth
                        <p class="text-center text-sm text-gray-700 font-medium mb-3">Olá, {{ Auth::user()->name }}</p>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block w-full btn-secondary text-center">Sair</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block btn-secondary text-center">Entrar</a>
                        <a href="{{ route('register') }}" class="block btn-primary text-center">Criar Conta</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content (with top padding for fixed navbar) -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-crimson-950 to-blood-950 text-white relative overflow-hidden">
        <!-- Decorative gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-crimson-500/10 via-blood-500/5 to-transparent pointer-events-none"></div>
        <div class="absolute inset-0 backdrop-blur-3xl"></div>
        <div class="container-wide section-padding relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brand Column -->
                <div class="md:col-span-1">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="relative w-12 h-12 bg-gradient-to-br from-crimson-600 via-blood-500 to-crimson-700 flex items-center justify-center rounded-2xl shadow-glow">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent rounded-2xl"></div>
                            <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round">
                                <path d="M12 2v20M5 9h14"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">Instacrente</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Conectando cristãos com propósito eterno.
                    </p>
                </div>

                <!-- Navigation Column -->
                <div>
                    <h3 class="font-semibold mb-4 text-sm uppercase tracking-wider">Navegação</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Início</a></li>
                        <li><a href="#sobre" class="text-gray-400 hover:text-white transition-colors text-sm">Sobre</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Recursos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Contato</a></li>
                    </ul>
                </div>

                <!-- Legal Column -->
                <div>
                    <h3 class="font-semibold mb-4 text-sm uppercase tracking-wider">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Termos de Uso</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Privacidade</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Cookies</a></li>
                    </ul>
                </div>

                <!-- Social Column -->
                <div>
                    <h3 class="font-semibold mb-4 text-sm uppercase tracking-wider">Redes Sociais</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-gray-700/50 rounded-2xl flex items-center justify-center hover:border-crimson-400 hover:bg-crimson-500/20 hover:shadow-glow transition-all duration-500 hover:scale-110" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-gray-700/50 rounded-2xl flex items-center justify-center hover:border-crimson-400 hover:bg-crimson-500/20 hover:shadow-glow transition-all duration-500 hover:scale-110" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-gray-700/50 rounded-2xl flex items-center justify-center hover:border-crimson-400 hover:bg-crimson-500/20 hover:shadow-glow transition-all duration-500 hover:scale-110" aria-label="YouTube">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-gray-800/50">
                <p class="text-center text-sm text-gray-400">
                    © {{ date('Y') }} Instacrente. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
