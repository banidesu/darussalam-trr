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
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/1.jpg') }}" alt="Gambar-1" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/2.jpg') }}" alt="Gambar-2" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/3.jpg') }}" alt="Gambar-3" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/4.jpg') }}" alt="Gambar-4" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/5.jpg') }}" alt="Gambar-5" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/6.jpg') }}" alt="Gambar-6" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/7.jpg') }}" alt="Gambar-7" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/8.jpg') }}" alt="Gambar-8" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/9.jpg') }}" alt="Gambar-9" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/10.jpg') }}" alt="Gambar-10" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/11.jpg') }}" alt="Gambar-11" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/12.jpg') }}" alt="Gambar-12" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/13.jpg') }}" alt="Gambar-13" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/14.jpg') }}" alt="Gambar-14" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/15.jpg') }}" alt="Gambar-15" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/16.jpg') }}" alt="Gambar-16" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/17.jpg') }}" alt="Gambar-17" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/18.jpg') }}" alt="Gambar-18" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/19.jpg') }}" alt="Gambar-19" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                    <div class="bg-slate-100 rounded-xl shadow-lg shadow-primary/20 overflow-hidden mb-0 lg:mb-5 xl:mb-10 border-b-[3px] border-primary/70">
                        <img src="{{ asset('img/20.jpg') }}" alt="Gambar-20" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection