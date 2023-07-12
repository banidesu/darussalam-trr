@extends('layout.default')
@section('content')
    <section id="gallery" class="pt-36 pb-32 bg-slate-300">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full px-4 mb-10 font-medium">
                <h3 class="text-4xl font-bold text-dark mb-10">Gallery</h3>
                <p class="max-w-lg">Kumpulan dokumentasi dari berbagai kegiatan di Masjid Darussalam Taman Rahayu Regency.</p>
            </div>
            <div class="w-full px-4 mb-10 font-medium">
                <div class="grid gap-7 md:gap-8 xl:gap-0 xl:gap-x-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/12.jpg') }}" alt="Gambar-12" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection