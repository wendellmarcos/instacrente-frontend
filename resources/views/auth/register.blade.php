@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center py-24 px-6">
    <div class="max-w-md w-full">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="accent-line mx-auto mb-6"></div>
            <h1 class="text-4xl md:text-5xl text-display mb-3">
                Criar Conta
            </h1>
            <p class="text-gray-600">
                Já tem uma conta?
                <a href="{{ route('login') }}" class="link">Faça login</a>
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
                <p class="text-crimson-700 text-sm font-semibold mb-2">Por favor, corrija os seguintes erros:</p>
                <ul class="list-disc list-inside text-crimson-600 text-sm space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="label">Nome Completo</label>
                <input id="name"
                       name="name"
                       type="text"
                       autocomplete="name"
                       required
                       value="{{ old('name') }}"
                       class="input @error('name') border-crimson-500 @enderror"
                       placeholder="Digite seu nome completo">
                @error('name')
                    <p class="mt-2 text-sm text-crimson-600">{{ $message }}</p>
                @enderror
            </div>

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
                       autocomplete="new-password"
                       required
                       class="input @error('password') border-crimson-500 @enderror"
                       placeholder="Mínimo 8 caracteres">
                @error('password')
                    <p class="mt-2 text-sm text-crimson-600">{{ $message }}</p>
                @enderror
                
                <!-- Password Strength Meter -->
                <div data-password-strength class="mt-3 hidden">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs text-gray-600">Força da senha:</span>
                        <span data-strength-text class="text-xs font-medium"></span>
                    </div>
                    <div class="w-full bg-gray-200 h-1 overflow-hidden">
                        <div data-strength-bar class="h-1 transition-all duration-300" style="width: 0%"></div>
                    </div>
                </div>
            </div>

            <!-- Password Confirmation Field -->
            <div>
                <label for="password_confirmation" class="label">Confirme a Senha</label>
                <input id="password_confirmation"
                       name="password_confirmation"
                       type="password"
                       autocomplete="new-password"
                       required
                       class="input"
                       placeholder="Digite a senha novamente">
            </div>

            <!-- Terms Checkbox -->
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" 
                           name="terms" 
                           type="checkbox" 
                           required
                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-gray-900">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="text-gray-700">
                        Concordo com os 
                        <a href="#" class="link">Termos de Uso</a>
                        e
                        <a href="#" class="link">Política de Privacidade</a>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" class="w-full btn-primary">
                    Criar Conta
                </button>
            </div>
        </form>

        <!-- Additional Info -->
        <div class="mt-12 text-center">
            <p class="text-sm text-gray-500">
                Ao criar uma conta, você concorda em fazer parte de uma comunidade cristã edificante e respeitosa.
            </p>
        </div>
    </div>
</div>

<script>
// Show password strength meter when user starts typing
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.querySelector('input[name="password"]');
    const strengthMeter = document.querySelector('[data-password-strength]');
    
    if (passwordInput && strengthMeter) {
        passwordInput.addEventListener('input', function() {
            if (this.value.length > 0) {
                strengthMeter.classList.remove('hidden');
            } else {
                strengthMeter.classList.add('hidden');
            }
        });
    }
});
</script>
@endsection
