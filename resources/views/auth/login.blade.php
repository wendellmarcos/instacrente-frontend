@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center py-24 px-6">
    <div class="max-w-md w-full">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="accent-line mx-auto mb-6"></div>
            <h1 class="text-4xl md:text-5xl text-display mb-3">
                Entrar
            </h1>
            <p class="text-gray-600">
                Não tem uma conta?
                <a href="{{ route('register') }}" class="link">Crie uma agora</a>
            </p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border-2 border-green-200 rounded-2xl backdrop-blur-xl">
                <p class="text-green-700 text-sm font-semibold">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Error Summary -->
        @if($errors->any())
            <div class="mb-6 p-4 bg-crimson-50 border-2 border-crimson-200 rounded-2xl backdrop-blur-xl">
                <p class="text-crimson-700 text-sm font-semibold">{{ $errors->first() }}</p>
            </div>
        @endif

        <!-- Form -->
        <form class="space-y-6" action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email Field -->
            <div>
                <label for="email" class="label">Email</label>
                <input id="email"
                       name="email"
                       type="email"
                       autocomplete="email"
                       required
                       value="{{ old('email') }}"
                       class="input @error('email') border-crimson-500 @enderror"
                       placeholder="seu@email.com">
                @error('email')
                    <p class="mt-2 text-sm text-crimson-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="label">Senha</label>
                <input id="password"
                       name="password"
                       type="password"
                       autocomplete="current-password"
                       required
                       class="input @error('password') border-crimson-500 @enderror"
                       placeholder="Digite sua senha">
                @error('password')
                    <p class="mt-2 text-sm text-crimson-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember"
                           name="remember"
                           type="checkbox"
                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-gray-900">
                    <label for="remember" class="ml-2 text-sm text-gray-700">
                        Lembrar de mim
                    </label>
                </div>
                <a href="#" class="text-sm link">
                    Esqueceu a senha?
                </a>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" class="w-full btn-primary">
                    Entrar
                </button>
            </div>
        </form>

        <!-- Additional Info -->
        <div class="mt-12 text-center">
            <p class="text-sm text-gray-500">
                Bem-vindo de volta à nossa comunidade cristã edificante.
            </p>
        </div>
    </div>
</div>
@endsection
