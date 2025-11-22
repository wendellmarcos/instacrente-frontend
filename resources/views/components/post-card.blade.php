@props(['post'])

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-crimson/20 transition-all duration-500 group">
    <!-- Post Header -->
    <div class="p-5 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <div class="relative">
                <div class="p-0.5 bg-gradient-to-tr from-crimson-500 to-gold-400 rounded-full">
                    <img src="{{ $post['avatar'] }}" alt="{{ $post['author'] }}" class="w-12 h-12 rounded-full object-cover border-2 border-white">
                </div>
                <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 rounded-full border-2 border-white shadow-sm"></div>
            </div>
            <div>
                <div class="flex items-center space-x-1">
                    <h3 class="font-bold text-gray-900 text-base font-display">{{ $post['author'] }}</h3>
                    @if($post['id'] == 1) <!-- Simulating verified badge for demo -->
                        <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </div>
                <p class="text-xs text-gray-500 font-medium">{{ $post['time'] }} • <span class="text-crimson-600">{{ $post['location'] ?? 'Terra' }}</span></p>
            </div>
        </div>
        <button class="text-gray-400 hover:text-crimson-600 transition-colors p-2 hover:bg-crimson-50 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
        </button>
    </div>

    <!-- Post Content -->
    <div class="px-5 pb-4">
        <p class="text-gray-700 text-base leading-relaxed whitespace-pre-line font-sans">{{ $post['content'] }}</p>
    </div>

    @if(isset($post['image']))
    <div class="w-full bg-gray-100 overflow-hidden relative group-hover:shadow-inner transition-all">
        <img src="{{ $post['image'] }}" alt="Post content" class="w-full h-auto object-cover transform group-hover:scale-[1.01] transition-transform duration-700 ease-out">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    </div>
    @endif

    <!-- Post Stats -->
    <div class="px-5 py-3 flex items-center justify-between border-b border-gray-50 bg-gray-50/30">
        <div class="flex items-center space-x-4 text-sm text-gray-500 font-medium">
            <span class="flex items-center space-x-1.5 hover:text-crimson-600 transition-colors cursor-pointer">
                <span class="bg-crimson-50 text-crimson-600 p-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                    </svg>
                </span>
                <span>{{ $post['likes'] }} Améns</span>
            </span>
            <span class="hover:text-gray-700 transition-colors cursor-pointer">{{ $post['comments'] }} Comentários</span>
        </div>
        <div class="flex -space-x-2">
            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=A&background=random" alt="">
            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=B&background=random" alt="">
            <img class="w-6 h-6 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=C&background=random" alt="">
        </div>
    </div>

    <!-- Post Actions -->
    <div class="px-2 py-2 flex items-center justify-between">
        <button class="flex-1 flex items-center justify-center space-x-2 py-2.5 rounded-xl hover:bg-crimson-50 transition-all duration-300 text-gray-500 hover:text-crimson-600 group/btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover/btn:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg>
            <span class="text-sm font-semibold">Amém</span>
        </button>
        
        <button class="flex-1 flex items-center justify-center space-x-2 py-2.5 rounded-xl hover:bg-gray-100 transition-all duration-300 text-gray-500 hover:text-gray-900 group/btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover/btn:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <span class="text-sm font-semibold">Comentar</span>
        </button>

        <button class="flex-1 flex items-center justify-center space-x-2 py-2.5 rounded-xl hover:bg-gray-100 transition-all duration-300 text-gray-500 hover:text-gray-900 group/btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover/btn:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
            </svg>
            <span class="text-sm font-semibold">Compartilhar</span>
        </button>
    </div>
</div>
