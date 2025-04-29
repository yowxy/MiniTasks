<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <section class="bg-indigo-600 py-16">
        <div class="text-center text-white px-6">
            <h2 class="text-3xl font-bold">Siap membawa bisnismu ke level selanjutnya?</h2>
            <p class="mt-4 mb-6 text-lg">Daftar sekarang dan nikmati analisis data otomatis dari Permify.</p>
            @auth
            <a href=""
                class="inline-block bg-white text-indigo-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition">
                Explore Sekarang
            </a>
            
            @endauth
            
            @guest
            <a href="{{ route('Login') }}"
                class="inline-block bg-white text-indigo-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition">Daftar
                Sekarang
            </a>
            @endguest
        </div>
    </section>
</body>

</html>