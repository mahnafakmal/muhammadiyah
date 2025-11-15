@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2">
            <div class="bg-gray-200 h-96 flex items-center justify-center relative overflow-hidden">
                <img src="{{ asset('img/pengukuhan.jpg') }}" alt="Pengukuhan Pimpinan" class="w-full object-cover h-full">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end justify-start p-6">
                    <h2 class="text-3xl font-bold text-white">PENGUKUHAN PIMPINAN RANTING MUHAMMADIYAH</h2>
                </div>
            </div>

            <div class="mt-4 border-t pt-4">
                <h3 class="text-xl font-bold text-red-600 mb-4">Lomba Minisoccer Pimpinan Ramaikan Semarak Milad Muhammadiyah ke-113 Kabupaten Pekalongan</h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="p-3 border rounded shadow">
                        <h4 class="font-semibold">DISKUSI ISLAM</h4>
                        <p class="text-sm text-gray-500">19 Mei 2025</p>
                        <p>Antara Qurban dan Poligami: Mampu Tak Mau, Tak Mampu Tapi Mau</p>
                    </div>
                    <div class="p-3 border rounded shadow">
                        <h4 class="font-semibold">KHUTBAH JUM'AT</h4>
                        <p class="text-sm text-gray-500">05 Mei 2025</p>
                        <p>Khutbah Jumat Bulan Dzulhijjah: Laboratorium Spiritual Transformasi diri melalui ibadah haji dan kurban</p>
                    </div>
                </div>
            </div>
        </div>

        <aside class="md:col-span-1">
            <div class="border p-4 shadow-lg bg-gray-50">
                <h3 class="text-xl font-bold mb-4 border-b pb-2 text-gray-800">Postingan Populer</h3>
                @foreach ($popularPosts as $post)
                    <div class="mb-3">
                        <a href="#" class="text-blue-700 hover:text-blue-900 font-medium leading-tight">{{ $post->title ?? 'Judul Postingan Populer #' . $loop->iteration }}</a>
                        <p class="text-xs text-gray-500">{{ now()->subDays($loop->iteration)->format('d M Y') }}</p>
                    </div>
                    @if (!$loop->last) <hr class="my-2"> @endif
                @endforeach
            </div>

            <div class="mt-6 p-4 border shadow-lg bg-white">
                <h3 class="text-xl font-bold mb-4 border-b pb-2 text-gray-800">Postingan Terbaru</h3>
                @foreach ($recentNews as $news)
                    <div class="mb-3">
                        <a href="#" class="text-gray-700 hover:text-red-600">{{ $news->title ?? 'Judul Berita Terbaru #' . $loop->iteration }}</a>
                        <p class="text-xs text-gray-500">{{ now()->subDays($loop->iteration)->format('d M Y') }} WIB</p>
                    </div>
                @endforeach
            </div>
        </aside>
    </div>
@endsection