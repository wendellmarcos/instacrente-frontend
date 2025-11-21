<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Instacrente') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 backdrop-blur-md bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-blood-600 tracking-tighter hover:text-blood-700 transition duration-300">
                            Instacrente
                        </a>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-blood-500 text-sm font-medium text-gray-900 focus:outline-none focus:border-blood-700 transition duration-150 ease-in-out">
                            Início
                        </a>
                        <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            Explorar
                        </a>
                    </div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-blood-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-blood-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blood-500 shadow-md hover:shadow-lg transition-all duration-300">
                        Criar Conta
                    </a>
                </div>
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:order-2 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.407-.06 4.123-.06h.08zm0 1.802h-.08c-2.596 0-2.917.01-3.82.05-.923.04-1.422.194-1.754.323-.438.169-.75.37-.98.598-.228.23-.429.542-.598.98-.129.332-.283.831-.323 1.754-.04.903-.05 1.224-.05 3.82v.08c0 2.596.01 2.917.05 3.82.04.923.194 1.422.323 1.754.169.438.37.75.598.98.23.228.542.429.98.598.332.129.831.283 1.754.323.903.04 1.224.05 3.82.05h.08c2.596 0 2.917-.01 3.82-.05.923-.04 1.422-.194 1.754-.323.438-.169.75-.37.98-.598.228-.23.429-.542.598-.98.129-.332.283-.831.323-1.754.04-.903.05-1.224.05-3.82v-.08c0-2.596-.01-2.917-.05-3.82-.04-.923-.194-1.422-.323-1.754-.169-.438-.37-.75-.598-.98-.23-.228-.542-.429-.98-.598-.332-.129-.831-.283-1.754-.323.903-.04 1.224-.05 3.82-.05zm0 4.865a3.268 3.268 0 110 6.536 3.268 3.268 0 010-6.536zm0 1.802a1.466 1.466 0 100 2.932 1.466 1.466 0 000-2.932zm5.374-5.943a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        &copy; {{ date('Y') }} Instacrente. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
