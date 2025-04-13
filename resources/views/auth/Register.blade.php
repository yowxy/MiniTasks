<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
     @include('components.navbar')
    <section class="min-h-screen flex items-center justify-center bg-gray-100 px-6">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
<h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Buat Akun Baru</h2>
    <form action="{{ route('RegisterPost') }}" method="POST" class="space-y-5">
        @csrf
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
          @error('name')
            <div class="invalid-feedback" >{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
          @error('email')
            <div class="invalid-feedback" >{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
          @error('password')
            <div class="invalid-feedback" >{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
          @error('password_confirmation')
            <div class="invalid-feedback" >{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Daftar</button>
    </form>
    <p class="text-sm text-center text-gray-600 mt-6">Sudah punya akun? <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Masuk di sini</a></p>
  </div>
</section>

</body>
</html>
