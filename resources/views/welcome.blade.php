@extends('layouts.app')

@section('content')
<!-- Hero Section - Minimalist -->
<section class="section-padding bg-white">
    <div class="container-narrow">
        <div class="text-center space-y-8">
            <!-- Accent Line -->
            <div class="flex justify-center">
                <div class="accent-line"></div>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-6xl md:text-7xl lg:text-8xl text-display tracking-tight">
                Conectando você<br>
                <span class="italic">com propósito eterno</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Uma rede social edificada na rocha. Segura, transparente e livre de ruídos.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8">
                <a href="{{ route('register') }}" class="btn-primary">
                    Começar Agora
                </a>
                <a href="#sobre" class="btn-secondary">
                    Saiba Mais
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-3 gap-12 pt-16 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-1">10k+</div>
                    <div class="text-sm uppercase tracking-wider text-gray-500">Membros</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-1">50k+</div>
                    <div class="text-sm uppercase tracking-wider text-gray-500">Postagens</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-gray-900 mb-1">100%</div>
                    <div class="text-sm uppercase tracking-wider text-gray-500">Seguro</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="divider"></div>

<!-- Features Section -->
<section id="sobre" class="section-padding bg-gray-50">
    <div class="container-wide">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <p class="text-sm uppercase tracking-wider text-gray-500 mb-4">Diferenciais</p>
            <h2 class="text-4xl md:text-5xl text-display">Por que escolher o Instacrente?</h2>
        </div>
        
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Feature 1 -->
            <div class="text-center reveal" data-delay="0">
                <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Comunidade Global</h3>
                <p class="text-gray-600 leading-relaxed">
                    Conecte-se com cristãos de todo o mundo e compartilhe experiências edificantes.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center reveal" data-delay="100">
                <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Conteúdo Seguro</h3>
                <p class="text-gray-600 leading-relaxed">
                    Moderação ativa para garantir um ambiente livre de conteúdo impróprio.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center reveal" data-delay="200">
                <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Rápido e Leve</h3>
                <p class="text-gray-600 leading-relaxed">
                    Uma experiência fluida e otimizada para todos os dispositivos.
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="text-center reveal" data-delay="300">
                <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Comunidade Ativa</h3>
                <p class="text-gray-600 leading-relaxed">
                    Participe de grupos, eventos e discussões que fortalecem sua fé.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="divider"></div>

<!-- Testimonials Section -->
<section class="section-padding bg-white">
    <div class="container-wide">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <p class="text-sm uppercase tracking-wider text-gray-500 mb-4">Depoimentos</p>
            <h2 class="text-4xl md:text-5xl text-display">O que dizem nossos membros</h2>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Testimonial 1 -->
            <div class="reveal" data-delay="0">
                <div class="mb-6">
                    <p class="text-lg text-gray-700 leading-relaxed italic">
                        "Finalmente uma rede social onde posso compartilhar minha fé sem medo de julgamentos. A comunidade é incrível!"
                    </p>
                </div>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center font-semibold mr-4">
                        M
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Maria Silva</div>
                        <div class="text-sm text-gray-500">São Paulo, BR</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="reveal" data-delay="100">
                <div class="mb-6">
                    <p class="text-lg text-gray-700 leading-relaxed italic">
                        "Encontrei um grupo de oração online que mudou minha vida. Gratidão por essa plataforma abençoada!"
                    </p>
                </div>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center font-semibold mr-4">
                        J
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">João Santos</div>
                        <div class="text-sm text-gray-500">Rio de Janeiro, BR</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="reveal" data-delay="200">
                <div class="mb-6">
                    <p class="text-lg text-gray-700 leading-relaxed italic">
                        "Ambiente seguro e acolhedor. Meus filhos também usam e me sinto tranquila com a moderação ativa."
                    </p>
                </div>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-900 text-white flex items-center justify-center font-semibold mr-4">
                        A
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Ana Costa</div>
                        <div class="text-sm text-gray-500">Belo Horizonte, BR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="divider"></div>

<!-- CTA Section -->
<section class="section-padding bg-gray-900 text-white">
    <div class="container-narrow text-center">
        <div class="accent-line mx-auto mb-8"></div>
        <h2 class="text-4xl md:text-5xl text-display mb-6">
            Pronto para fazer parte?
        </h2>
        <p class="text-xl text-gray-300 mb-12 leading-relaxed">
            Junte-se a milhares de cristãos que já estão compartilhando fé, esperança e amor.
        </p>
        <a href="{{ route('register') }}" class="btn-secondary bg-white text-gray-900 hover:bg-gray-100">
            Criar Conta Grátis
        </a>
        <p class="mt-8 text-sm text-gray-400">
            Sem cartão de crédito • 100% gratuito
        </p>
    </div>
</section>
@endsection
