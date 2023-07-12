@extends('layout.default')
@section('content')
<section id="profile" class="pt-36 pb-32 bg-slate-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative md:flex p-0 rounded-xl overflow-hidden md:shadow-lg md:bg-slate-100 bg-slate-300">
            <div class="w-full">
                <div class="bg-slate-100 md:rounded-none rounded-xl overflow-hidden md:overflow-visible shadow-md md:shadow-none shadow-primary/20 border-2 md:border-none border-primary/40 hover:shadow-lg md:hover:shadow-none hover:shadow-primary/25 hover:border-primary/50 md:hover:border-none transition duration-100 ease-linear mb-10 md:h-full">
                    <img src="{{ asset('img/4.jpg') }}" alt="Gambar-4" class="w-full md:h-full aspect-video md:aspect-auto object-cover" loading="lazy">
                </div>
            </div>
            <div class="w-full mb-10 md:p-8 font-medium lg:text-justify md:text-lg text-base">
                <h3 class="lg:text-4xl text-3xl font-bold text-dark md:mb-10 mb-7">Profil Masjid Darussalam</h3>
                <p class="mb-3 indent-5 md:indent-0">Secara Perumahan Taman Rahayu Regency blok A awal berdirinya atau rencana pembangunan musholla pada tahun 2004 karena pada umumnya diperumahan taman rahayu regency belum dibangun masjid jami' atau musholla lainnya. Maka pengurus warga blok A khususnya atau RW 08 umumnya berinisiatif mengajukan ke developer / pengembang <span class="italic"> BUKAKA Realty</span> untuk membangun musholla di fasos / fasum yang ada di blok A9. Kemudian surat kita ajukan dan pada dasarnya pengembang menyetujui pembangunan sarana ibadah (mushollah) di blok A. Maka pada bulan April tahun 2004 dilakukan peletakan batu pertama dengan luas bangunan <span class="tabular-nums"> 13 x 13</span>, dengan luas tanah <span class="tabular-nums">330m<sup>2</sup></span> oleh tokoh masyarakat pak haji open dan pengurus wilayah blok A.</p>
                <p class="mb-3 indent-5 md:indent-0">Sesuai perkembangan pembangunan di taman rahayu, maka taman rahayu berkembang menjadi 2 RW (rw 08 dan 09), kemudian RW 08 telah didirikan masjid jami' bersama rw 09. Maka Setelah musholla mengalami perkembangan kemakmuran maka didirikan TPA, disamping itu juga kegiatan pengajian lainnya. kemudian musholla darussalam direnovasi menjadi masjid tahun 2020 saat terjadi covid-19.</p>
            </div>
            <div class="absolute hidden md:block bottom-5 right-6">
                <p class="text-base text-secondary italic tracking-wide">Masjid Darussalam Taman Rahayu Regency</p>
            </div>
        </div>
    </div>
</section>
<section id="profile2" class="pt-36 pb-32 bg-dark">
    <div class="container">
        <div class="mx-auto max-w-7xl">
            <div class="w-full px-4">
                <h4 class="font-bold uppercase text-primary text-lg mb-5">perkembangan pembangunan masjid darussalam</h4>
                <div class="w-full mb-24">
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Tahun 2004 - 2020</h2>
                    <hr class="border-primary/50 mb-14">
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/19.jpg') }}" alt="gambar-19" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/20.jpg') }}" alt="gambar-20" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/21.jpg') }}" alt="gambar-21" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/22.jpg') }}" alt="gambar-22" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/23.jpg') }}" alt="gambar-23" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/24.jpg') }}" alt="gambar-24" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Tahun 2020 - Sekarang</h2>
                    <hr class="border-primary/50 mb-14">
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/25.jpg') }}" alt="gambar-25" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/26.jpg') }}" alt="gambar-26" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/27.jpg') }}" alt="gambar-27" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/28.jpg') }}" alt="gambar-28" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/29.jpg') }}" alt="gambar-29" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/30.jpg') }}" alt="gambar-30" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/31.jpg') }}" alt="gambar-31" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/32.jpg') }}" alt="gambar-32" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/33.jpg') }}" alt="gambar-33" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/34.jpg') }}" alt="gambar-34" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                        <div class="bg-slate-300 h-full rounded-xl shadow-md shadow-primary/20 overflow-hidden border-2 border-primary/40 transition duration-100 ease-linear hover:border-primary/70 hover:shadow-primary/25 hover:shadow-lg aspect-auto lg:aspect-video object-cover">
                            <img src="{{ asset('img/35.jpg') }}" alt="gambar-35" loading="lazy" class="w-full h-full lg:h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection