
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-start h-12 px-4 space-x-1 text-sm">
        <a href="{{ route('home') }}" class="nav-link text-gray-700 font-semibold">BERANDA</a>
        
        <div class="relative nav-item group">
            <button class="nav-link text-gray-700 font-semibold flex items-center">
                ORGANISASI <span class="ml-1 text-xs">▼</span>
            </button>
            <div class="dropdown-menu absolute hidden group-hover:block w-48 bg-white border border-gray-200 z-10 shadow-xl py-1">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Amal Usaha</a>
                <a href="{{ route('organisasi.pimpinan') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil Pimpinan</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Program Kerja</a>
            </div>
        </div>

        <a href="#" class="nav-link text-gray-700 font-semibold">KABAR</a>
        <a href="#" class="nav-link text-gray-700 font-semibold">SEPUTAR ISLAM</a>
        </div>
</nav>