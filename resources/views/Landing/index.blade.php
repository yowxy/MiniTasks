<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Permify</title>
</head>
<body>
  <div class="bg-white">
 @include('components.navbar')
    <!-- Hero Section -->
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Solusi untuk bisnis Anda. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-7xl">Buka Potensi Baru Bisnismu Lewat Data</h1>
          <p class="mt-8 text-lg text-gray-500 sm:text-xl">Manfaatkan data untuk mengembangkan strategi dan keputusan yang lebih cerdas.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai Sekarang</a>
            <a href="#" class="text-sm font-semibold text-gray-900">Pelajari Selengkapnya<span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

 
  <section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
    <h2 class="text-4xl font-bold text-gray-900 sm:text-5xl">Kenapa Harus <span class="text-indigo-600">Permify</span>?</h2>
    <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
      Kami bantu kamu mengambil keputusan bisnis lebih baik lewat kekuatan data, fitur cerdas, dan integrasi seamless.
    </p>

    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Card 1 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <!-- Icon from Lucide -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 3v18h18" />
            <path d="M9 15l2 2l4-4" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Analitik Real-Time</h3>
        <p class="mt-3 text-gray-600">Pantau performa bisnis dengan data langsung dari lapangan secara instan dan akurat.</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 4a1 1 0 0 1 1-1h7v5h6v14H4a1 1 0 0 1-1-1V4z" />
            <path d="M16 8l5 5l-5 5" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Laporan Otomatis</h3>
        <p class="mt-3 text-gray-600">Hemat waktu dengan laporan yang langsung dikirim secara terjadwal ke tim dan atasanmu.</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M4 4v16h16V4H4z" />
            <path d="M8 8h8v8H8V8z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Integrasi Mudah</h3>
        <p class="mt-3 text-gray-600">Integrasi cepat dengan software yang sudah kamu pakai seperti Google Sheets, Slack, dan lainnya.</p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 2L2 7l10 5 10-5-10-5z" />
            <path d="M2 17l10 5 10-5" />
            <path d="M2 12l10 5 10-5" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Keamanan Data</h3>
        <p class="mt-3 text-gray-600">Sistem enkripsi tingkat tinggi untuk menjaga data penting perusahaan Anda.</p>
      </div>

      <!-- Card 5 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 1v22" />
            <path d="M5 12h14" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Multi Role Access</h3>
        <p class="mt-3 text-gray-600">Atur hak akses berdasarkan peran pengguna dengan sistem otorisasi yang fleksibel.</p>
      </div>

      <!-- Card 6 -->
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-md transition">
        <div class="flex justify-center items-center w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 8v4l3 3" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Support 24/7</h3>
        <p class="mt-3 text-gray-600">Tim support kami siap membantu kamu kapan pun kamu butuh bantuan teknis atau konsultasi.</p>
      </div>
    </div>
  </div>
</section>



<section class="bg-white py-20">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-12">Apa Kata Mereka?</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
      <div class="bg-gray-100 p-8 rounded-xl text-left shadow-sm hover:shadow-md transition">
        <p class="italic text-gray-700">“Sejak pakai Permify, proses pengambilan keputusan kami jadi 3x lebih cepat. Dashboard yang interaktif dan laporan real-time benar-benar mengubah cara tim kami bekerja. Sekarang kami bisa fokus pada strategi, bukan sekadar mengumpulkan data.”</p>
        <p class="mt-6 font-semibold text-indigo-600">– Andi, CEO StartupAja</p>
      </div>
      <div class="bg-gray-100 p-8 rounded-xl text-left shadow-sm hover:shadow-md transition">
        <p class="italic text-gray-700">“Integrasinya gampang banget dan support-nya top! Dalam waktu kurang dari satu jam, kami sudah bisa menghubungkan semua tools yang kami pakai sehari-hari. Tim support juga sangat responsif dan membantu di setiap prosesnya.”</p>
        <p class="mt-6 font-semibold text-indigo-600">– Rina, CTO FutureTech</p>
      </div>
      <div class="bg-gray-100 p-8 rounded-xl text-left shadow-sm hover:shadow-md transition">
        <p class="italic text-gray-700">“Permify membantu kami menyederhanakan pelaporan bulanan untuk seluruh divisi. Sekarang semua laporan terotomatisasi dan dikirim tepat waktu ke manajemen. Sangat hemat waktu dan mengurangi kesalahan manual.”</p>
        <p class="mt-6 font-semibold text-indigo-600">– Bayu, Manager Operasional SinarData</p>
      </div>
      <div class="bg-gray-100 p-8 rounded-xl text-left shadow-sm hover:shadow-md transition">
        <p class="italic text-gray-700">“Kami butuh solusi yang scalable dan aman untuk pertumbuhan bisnis kami. Permify menjawab kebutuhan itu dengan fitur analitik dan keamanan data kelas enterprise. Sangat kami rekomendasikan untuk startup yang ingin berkembang lebih cepat.”</p>
        <p class="mt-6 font-semibold text-indigo-600">– Dita, Head of Product NexaCorp</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-indigo-600 py-16">
  <div class="text-center text-white px-6">
    <h2 class="text-3xl font-bold">Siap membawa bisnismu ke level selanjutnya?</h2>
    <p class="mt-4 mb-6 text-lg">Daftar sekarang dan nikmati analisis data otomatis dari Permify.</p>
    <a href="#" class="inline-block bg-white text-indigo-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition">Daftar Sekarang</a>
  </div>
</section>



  <script>
    const openBtn = document.getElementById('openMenuBtn');
    const closeBtn = document.getElementById('closeMenuBtn');
    const menu = document.getElementById('mobileMenu');

    openBtn.addEventListener('click', () => {
      menu.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
      menu.classList.add('hidden');
    });
  </script>
</body>
</html>
