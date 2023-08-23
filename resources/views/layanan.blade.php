@extends('layout.default')
@section('content')
    <section id="layanan" class="pt-36 pb-32 bg-slate-300">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-full px-4 mb-10 font-medium">
                <h3 class="text-4xl font-bold text-dark mb-10">Layanan</h3>
                <p class="font-medium text-base text-dark max-w-xl lg:text-lg">Masjid Darussalam selalu berusaha dan
                    insyaallah istiqomah dalam memberikan pelayanan yang terbaik dan juga mengadakan kegiatan-kegiatan yang
                    bersifat religi, berikut ini beberapa pelayanan dan kegiatan Masjid Darussalam :</p>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/7.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover"
                            loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Melayani Zakat Fitrah</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam melayani penerimaan dan
                                menyalurkan Zakat Fitrah pada setiap bulan Ramadhan.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/8.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover"
                            loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Menyalurkan Hewan Kurban</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam melayani penerimaan dan
                                menyalurkan Hewan Kurban pada setiap bulan Zulhijah.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/10.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover"
                            loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Berbagi Takjil</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam selalu mengadakan berbuka
                                bersama sekaligus memberikan takjil untuk para musafir.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/11.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover"
                            loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Pengajian Rutin</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam selalu mengadakan
                                pengajian rutin setiap malam senin dengan bimbingan ustadz.</p>
                            <a href="#"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
