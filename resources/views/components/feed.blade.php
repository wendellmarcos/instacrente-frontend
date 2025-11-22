@props(['posts'])

<div class="max-w-2xl mx-auto space-y-8">
    <!-- Create Post Input -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 mb-8 hover:shadow-md transition-shadow duration-300">
        <div class="flex space-x-4">
            <div class="flex-shrink-0">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center text-gray-500 font-bold border-2 border-white shadow-sm">
                    EU
                </div>
            </div>
            <div class="flex-1">
                <div class="bg-gray-50 rounded-2xl px-5 py-3 text-gray-500 text-sm cursor-pointer hover:bg-gray-100 transition-colors border border-transparent hover:border-gray-200">
                    No que você está pensando hoje? Compartilhe uma bênção...
                </div>
                <div class="flex items-center justify-between mt-4 px-2">
                    <div class="flex space-x-6">
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-crimson-600 transition-colors text-sm font-medium group">
                            <div class="p-1.5 rounded-full bg-green-50 group-hover:bg-green-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span>Foto/Vídeo</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-crimson-600 transition-colors text-sm font-medium group">
                            <div class="p-1.5 rounded-full bg-yellow-50 group-hover:bg-yellow-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span>Sentimento</span>
                        </button>
                    </div>
                    <button class="bg-gradient-to-r from-gray-900 to-gray-800 text-white px-6 py-2 rounded-xl text-sm font-semibold hover:from-crimson-600 hover:to-blood-600 transition-all duration-300 shadow-lg hover:shadow-crimson/30 transform hover:-translate-y-0.5">
                        Publicar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Feed Stream -->
    <div class="space-y-8">
        @foreach($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    </div>
    
    <!-- Loading State -->
    <div class="py-12 text-center">
        <div class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-gray-200 border-t-crimson-600"></div>
        <p class="mt-4 text-sm text-gray-500 font-medium animate-pulse">Carregando mais bênçãos...</p>
    </div>
</div>
