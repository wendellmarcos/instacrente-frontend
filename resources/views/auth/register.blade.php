@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-2xl">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Crie sua conta
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Ou
                <a href="#" class="font-medium text-blood-600 hover:text-blood-500 transition duration-150 ease-in-out">
                    faça login na sua conta existente
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mb-4">
                    <label for="name" class="sr-only">Nome Completo</label>
                    <input id="name" name="name" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blood-500 focus:border-blood-500 focus:z-10 sm:text-sm" placeholder="Nome Completo">
                </div>
                <div class="mb-4">
                    <label for="email-address" class="sr-only">Endereço de Email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blood-500 focus:border-blood-500 focus:z-10 sm:text-sm" placeholder="Endereço de Email">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Senha</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blood-500 focus:border-blood-500 focus:z-10 sm:text-sm" placeholder="Senha">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirme a Senha</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blood-500 focus:border-blood-500 focus:z-10 sm:text-sm" placeholder="Confirme a Senha">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blood-600 focus:ring-blood-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                        Lembrar-me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-blood-600 hover:text-blood-500">
                        Esqueceu sua senha?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blood-600 hover:bg-blood-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blood-500 transition duration-300">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: solid/lock-closed -->
                        <svg class="h-5 w-5 text-blood-500 group-hover:text-blood-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
