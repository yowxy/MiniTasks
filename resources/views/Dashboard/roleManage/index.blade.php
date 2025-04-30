@extends('components.layout')

@include('components.sidebar')
{{-- @section('content') --}}

    <div class="p-6 ml-64">
        <div class="max-w-7xl mx-auto  shadow-md rounded-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold text-gray-700">Manajemen Role</h2>
                <a href="{{ route('createRole') }}"
                   class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 text-sm">
                    + Tambah Role
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-100 text-gray-700 text-left text-sm uppercase">
                        <tr>
                            {{-- <th class="px-4 py-2">#</th> --}}
                            <th class="px-4 py-2">Nama Role</th>
                            <th class="px-4 py-2">Jumlah Pengguna</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                        {{-- @foreach ($roles as $index => $role) --}}
                            <tr>
                                {{-- <td class="px-4 py-2"></td> --}}
                                <td class="px-4 py-2"></td>
                                <td class="px-4 py-2"></td>
                                <td class="px-4 py-2">
                                    <div class="flex space-x-2">
                                        <a href=""
                                           class="bg-blue-700 text-white px-4 py-2 rounded  hover:underline text-sm">Edit</a>
                                        <form action="" method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus role ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded  hover:underline text-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {{-- @endforeach --}}

                        {{-- @if ($roles->isEmpty())
                            <tr>
                                <td colspan="4" class="px-4 py-6 text-center text-gray-400">Belum ada role.</td>
                            </tr>
                        @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{-- @endsection --}}
