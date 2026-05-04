<footer class="bg-[#1e3a8a] text-white mt-24">
    <div class="container mx-auto px-4 lg:px-8 py-14 grid gap-10 md:grid-cols-4">
        <div class="md:col-span-2">
            <div class="flex items-center gap-4 mb-4">
                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-white p-1.5 shadow-sm">
                    <img src="{{ asset('images/logoSMK.png') }}" alt="Logo SMKS CIM" class="h-full w-full object-contain">
                </div>
                <div>
                    <p class="font-bold text-lg tracking-wide">SMKS Cipta Insani Mandiri</p>
                    <p class="text-xs text-[#f5c542] font-semibold tracking-wider uppercase mt-0.5">Terakreditasi A</p>
                </div>
            </div>
            <p class="text-sm text-gray-300 max-w-md leading-relaxed">
                Unggul dalam layanan pembelajaran, kegiatan berwawasan islami, religius, nyaman, aman dan berkarakter melalui pendidikan formal, non-formal, dan wawasan kebangsaan.
            </p>
        </div>
        
        <div>
            <h4 class="font-bold mb-4 text-[#f5c542] text-lg tracking-wide">Navigasi</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="{{ route('profil') }}" class="hover:text-[#f5c542] transition-colors duration-200 flex items-center gap-2"><span class="text-[10px]">▶</span> Profil Sekolah</a></li>
                <li><a href="{{ route('program') }}" class="hover:text-[#f5c542] transition-colors duration-200 flex items-center gap-2"><span class="text-[10px]">▶</span> Program Keahlian</a></li>
                <li><a href="{{ route('kesiswaan') }}" class="hover:text-[#f5c542] transition-colors duration-200 flex items-center gap-2"><span class="text-[10px]">▶</span> Kesiswaan</a></li>
                <li><a href="{{ route('ppdb') }}" class="hover:text-[#f5c542] transition-colors duration-200 flex items-center gap-2"><span class="text-[10px]">▶</span> PPDB</a></li>
            </ul>
        </div>
        
        <div>
            <h4 class="font-bold mb-4 text-[#f5c542] text-lg tracking-wide">Kontak</h4>
            <ul class="space-y-3 text-sm text-gray-300">
                <li class="flex gap-3 items-start">
                    <span class="mt-0.5">📍</span> 
                    <span class="leading-relaxed">Jalan Curugan No 94 RT 06/12 Tanah Baru, Beji, Kota Depok, Jawa Barat</span>
                </li>
                <li class="flex gap-3 items-center">
                    <span>📞</span> 
                    <a href="https://wa.me/6285777119248" class="hover:text-[#f5c542] transition-colors duration-200">0857-7711-9248</a>
                </li>
                <li class="flex gap-3 items-center">
                    <span>📷</span> 
                    <a href="https://instagram.com/smkcimdepok" class="hover:text-[#f5c542] transition-colors duration-200" target="_blank">@smkcimdepok</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="border-t border-white/20">
        <div class="container mx-auto px-4 lg:px-8 py-6 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-400">
            <div class="text-center md:text-left">
                © {{ date('Y') }} SMKS Cipta Insani Mandiri. All rights reserved.
            </div>
            <div class="font-semibold tracking-wider text-gray-300">
                KREATIF · SANTUN · BERKARAKTER
            </div>
        </div>
    </div>
</footer>