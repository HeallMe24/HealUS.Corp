<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3D4B4D] dark:text-[#B7C0C0] leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-6 p-6 bg-[#F2FCF9] dark:bg-[#364841] shadow-sm sm:rounded-lg">
                <h3 class="font-semibold text-lg text-[#3D4B4D] dark:text-[#B7C0C0] mb-4">
                    Admin Options
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Tombol Tabel Galeri -->
                    <a href="{{ route('galleries.table') }}" class="inline-block px-6 py-3 text-center font-semibold text-lg text-[#3D4B4D] dark:text-[#B7C0C0] bg-[#3A6E6A] rounded-md shadow hover:bg-[#3D8B84] dark:bg-[#4C7572] dark:hover:bg-[#6DAEAE] transition duration-300">
                        {{ __('Buka Tabel Galeri') }}
                    </a>

                     <!-- Tombol Halaman Home -->
                     <a href="{{ url('/home') }}" class="inline-block px-6 py-3 text-center font-semibold text-lg text-[#3D4B4D] dark:text-[#B7C0C0] bg-[#3A6E6A] rounded-md shadow hover:bg-[#3D8B84] dark:bg-[#4C7572] dark:hover:bg-[#6DAEAE] transition duration-300">
                        {{ __('Buka Halaman Home') }}
                    </a>
                    
                    <!-- Tombol Tabel Artikel -->
                    <a href="{{ route('articles.table') }}" class="inline-block px-6 py-3 text-center font-semibold text-lg text-[#3D4B4D] dark:text-[#B7C0C0] bg-[#3A6E6A] rounded-md shadow hover:bg-[#3D8B84] dark:bg-[#4C7572] dark:hover:bg-[#6DAEAE] transition duration-300">
                        {{ __('Buka Tabel Artikel') }}
                    </a>
                </div>
            </div>

            <!-- Tabel Pesan -->
            <div class="mt-6 p-6 bg-[#F2FCF9] dark:bg-[#364841] shadow-sm sm:rounded-lg">
                <h3 class="font-semibold text-lg text-[#3D4B4D] dark:text-[#B7C0C0] mb-4">
                    {{ __('Pesan dari Pengguna') }}
                </h3>

                <table class="table-auto w-full text-left dark:text-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Pesan</th>
                            <th class="px-4 py-2">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $message->name }}</td>
                                <td class="px-4 py-2">{{ $message->email }}</td>
                                <td class="px-4 py-2">{{ $message->message }}</td>
                                <td class="px-4 py-2">{{ $message->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-2 text-center">
                                    {{ __('Belum ada pesan.') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
