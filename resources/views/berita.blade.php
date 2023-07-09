@extends('layout.default')
@section('content')
    <section id="berita" class="pt-36 pb-32 bg-slate-300">
        <div class="container">
            <div class="mx-auto max-w-7xl">
                <div class="w-full mb-10 sm:px-6 lg:px-8">
                    <h2 class="font-bold capitalize text-dark text-3xl mb-3">Berita Terkini</h2>
                    {{-- <p class="font-medium text-base text-dark max-w-xl lg:text-lg">beberapa berita yang penting</p> --}}
                </div>
                <div class="w-full sm:px-6 lg:px-8 mb-10 font-medium">
                    <div class="grid gap-7 md:gap-8 xl:gap-0 xl:gap-x-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/12.jpg') }}" alt="Gambar-12" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Open Donasi</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam membuka donasi untuk para donatur yang ingin memberikan infaq terbaiknya. Donasi boleh berupa material ataupun non material.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/15.jpg') }}" alt="Gambar-15" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Menyalurkan daging hewan kurban</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam menyalurkan daging hewan kurban untuk masyarakat sekitar.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/14.jpg') }}" alt="Gambar-14" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Sholat Idul Adha</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam mengadakan sholat idul adha 1444H.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/17.jpg') }}" alt="Gambar-17" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Takbir Keliling</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam mengadakan takbir keliling atau pawai obor dalam rangka menyambut hari raya idul adha 1444H.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/13.jpg') }}" alt="Gambar-13" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Sholat Idul Fitri</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam mengadakan sholat idul fitri 1444H.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/16.jpg') }}" alt="Gambar-16" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Menyalurkan beras & uang zakat</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam menyalurkan beras dan uang zakat untuk masyarakat sekitar yang membutuhkan.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/18.jpg') }}" alt="Gambar-18" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Iktikaf di Masjid Darussalam</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam mengadakan Iktikaf pada 10 hari terakhir puasa pada bulan ramadhan.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] hover:border-primary/70 transition duration-100 ease-linear">
                                <img src="{{ asset('img/11.jpg') }}" alt="Gambar-11" class="w-full aspect-video object-cover" loading="lazy">
                                <div class="py-6 px-6">
                                    <h3 class="text-xl capitalize font-semibold text-dark truncate mb-3">Pengajian Yasin Tahlil</h3>
                                    <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam mengadakan pengajian rutin yasin tahlil yang diadakan setiap malam jumat.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection