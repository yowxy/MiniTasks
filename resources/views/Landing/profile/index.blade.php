@include('components.navbar')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-3xl">
        <div class="flex items-center space-x-6">
            <!-- Avatar -->
            <img src="{{ Auth::user()->image_path ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}" 
                 alt="Profile Picture"
                 class="w-24 h-24 rounded-full object-cover border-4 border-indigo-500">

            <!-- User Info -->
            <div>
                <h2 class="text-2xl font-semibold">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
                <p class="mt-1 text-sm text-gray-400">Bergabung sejak {{ Auth::user()->created_at->format('d M Y') }}</p>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="mt-6 flex gap-4">
            <a href="#"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm">
                Edit Profil
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>


@include('components.footer')