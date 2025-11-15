@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="lg:col-span-2">
            
            <div class="bg-gray-200 h-96 overflow-hidden relative mb-6 shadow-xl">
                @if ($mainHighlight)
                    <img src="{{ asset('img/' . $mainHighlight->image) }}" alt="{{ $mainHighlight->title }}" class="w-full object-cover h-full">
                    <div class="absolute bottom-0 left-0 p-6 bg-black bg-opacity-50 w-full">
                        <h2 class="text-2xl font-bold text-white uppercase">{{ $mainHighlight->title }}</h2>
                        <p class="text-sm text-yellow-400 mt-1">{{ $mainHighlight->published_at->format('d F Y') }}</p>
                    </div>
                @else
                    <div class="flex items-center justify-center h-full text-gray-600">
                        [Gambar Pengukuhan Pimpinan Ranting Muhammadiyah]
                    </div>
                @endif
            </div>

            <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b-2 border-red-600 pb-1">Kabar Persyarikatan</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @forelse ($recentNews as $news)
                    <div class="p-4 border rounded-lg shadow-sm hover:shadow-lg transition duration-300">
                        <p class="text-sm text-red-600 font-semibold mb-1">KABAR</p>
                        <h4 class="text-lg font-bold text-gray-800">{{ $news->title }}</h4>
                        <p class="text-xs text-gray-500 mt-1">{{ $news->published_at->format('d F Y H:i') }} WIB</p>
                        <p class="mt-2 text-gray-600">{{ Str::limit($news->excerpt, 120) }}</p>
                        <a href="#" class="text-blue-500 hover:underline text-sm mt-2 block">Selengkapnya...</a>
                    </div>
                @empty
                    <p class="text-gray-500 col-span-2">Belum ada berita terbaru untuk ditampilkan.</p>
                @endforelse
            </div>
        </div>

        <aside class="lg:col-span-1">
            <div class="p-4 border rounded-lg shadow-lg bg-gray-50">
                <h3 class="text-xl font-bold mb-4 pb-2 border-b text-gray-800">Postingan Populer</h3>
                @foreach ($popularPosts as $post)
                    <div class="mb-3">
                        <a href="#" class="text-blue-700 hover:text-red-600 font-medium leading-tight block">
                            {{ $post->title }}
                        </a>
                        <p class="text-xs text-gray-500">{{ $post->published_at->format('d M Y') }}</p>
                    </div>
                    @if (!$loop->last) <hr class="my-2 border-gray-200"> @endif
                @endforeach
            </div>
        </aside>
    </div>
@endsection