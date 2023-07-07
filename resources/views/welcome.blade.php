@extends('layout.default')
@section('content')
<div class="mx-auto max-w-7xl md:py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <div class="bg-white h-full md:rounded-xl shadow-lg overflow-hidden">
        <!-- spicr-slider basic markup -->
        <div data-function="spicr" class="spicr spicr-slider" data-pause="false" data-interval="8000" data-touch="false">
            <div class="spicr-inner">
                <div class="item perspective-1500">
                    <!-- item content -->
                    <div class="item-bg spicr-layer" data-translate="x:-100%" data-duration="1000" data-easing="easingCubicInOut" style="background-image: url('{{ asset('img/1.jpg') }}')">
                        <div class="overlay"></div>
                    </div>
                    <div class="w-full px-4 h-full">
                        <div class="flex items-center h-full perspective">
                            <div class="flex flex-col md:w-1/2 text-center mx-auto">
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingBackOut">
                                    <h1 class="text-4xl font-bold">Masjid Darussalam</h1>
                                </div>
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingCubicInOut">
                                    <p class="text-base tracking-widest">Perumahan Taman Rahayu Regency, Kelurahan Ciketing Udik, Kecamatan Bantar Gebang, Bekasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item perspective-1500">
                    <!-- item content -->
                    <div class="item-bg spicr-layer" data-translate="x:50%,y:200,z:500" data-transform-origin="z:50%" data-duration="1000" data-easing="easingCubicInOut" style="background-image: url('{{ asset('img/2.jpg') }}')">
                        <div class="overlay"></div>
                    </div>
                    <div class="w-full px-4 h-full">
                        <div class="flex items-center h-full perspective">
                            <div class="flex flex-col md:w-1/2 text-center mx-auto">
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingBackOut">
                                    <h1 class="text-4xl font-bold">Info Layanan</h1>
                                </div>
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingCubicInOut">
                                    <p class="text-base tracking-widest">Menerima & Menyalurkan Zakat Fitrah, Menerima & Menyalurkan Hewan Kurban</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item perspective-1500">
                    <!-- item content -->
                    <div class="item-bg spicr-layer" data-translate="x:-50%,y:-200,z:-500" data-transform-origin="z:50%" data-duration="1000" data-easing="easingCubicInOut" style="background-image: url('{{ asset('img/3.jpg') }}')">
                        <div class="overlay"></div>
                    </div>
                    <div class="w-full px-4 h-full">
                        <div class="flex items-center h-full perspective">
                            <div class="flex flex-col md:w-1/2 text-center mx-auto">
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingBackOut">
                                    <h1 class="text-4xl font-bold">Risda</h1>
                                </div>
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingCubicInOut">
                                    <p class="text-lg font-semibold tracking-widest">Remaja Islam Masjid Darussalam</p>
                                    <p class="text-base tracking-widest">Pemuda pemudi yang insyaallah istiqomah dalam memakmurkan Masjid Darussalam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item perspective-1500">
                    <!-- item content -->
                    <div class="item-bg spicr-layer" data-translate="x:100,z:500" data-transform-origin="z:50%" data-duration="1000" data-easing="easingCubicInOut" style="background-image: url('{{ asset('img/4.jpg') }}')">
                        <div class="overlay"></div>
                    </div>
                    <div class="w-full px-4 h-full">
                        <div class="flex items-center h-full perspective">
                            <div class="flex flex-col md:w-1/2 text-center mx-auto">
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingBackOut">
                                    <h1 class="text-4xl font-bold">TPA & PAUD</h1>
                                </div>
                                <div class="spicr-layer py-6" data-translate="y:250" data-rotate="z:15" data-duration="1000" data-delay="700" data-easing="easingCubicInOut">
                                    <p class="text-base tracking-widest">TPA dan PAUD Masjid Darussalam untuk kegiatan mengaji dan belajar anak-anak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="spicr-pages flex flex-row justify-center">
                <li data-slide-to="0" class="active"></li>
                <li data-slide-to="1" class=""></li>
                <li data-slide-to="2" class=""></li>
                <li data-slide-to="3" class=""></li>
            </ol>
        </div>
    </div>
</div>
<section id="beranda" class="pt-36 pb-32 bg-dark">
    <div class="container">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <div class="h-full flex flex-wrap flex-col gap-5">
                        <div>
                            <h4 class="font-bold uppercase text-primary text-lg mb-3">Lokasi Masjid Darussalam</h4>
                            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Kota Bekasi</h2>
                            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Perum. Taman Rahayu Regency, Kec. Bantar Gebang, Kel. Ciketing Udik, Kota Bekasi, Jawa Barat</p>
                        </div>
                        <div>
                            <h4 class="font-bold uppercase text-primary text-lg mb-3">Info Kontak</h4>
                            <div class="flex flex-col gap-3">
                                <div class="flex items-center [&:hover>*]:text-slate-400 [&:hover>span]:border-slate-400">
                                    <span class="w-9 h-9 mr-3 rounded-lg p-1 flex justify-center items-center border border-slate-500 text-slate-500 transition duration-300 ease">
                                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                    </span>
                                    <p class="font-medium text-base text-secondary max-w-xl transition duration-300 ease lg:text-lg">WA : 082312394001 <span>(Maryanto)</span></p>
                                </div>
                                <div class="flex items-center [&:hover>*]:text-slate-400 [&:hover>span]:border-slate-400">
                                    <span class="w-9 h-9 mr-3 rounded-lg p-1 flex justify-center items-center border border-slate-500 text-slate-500 transition duration-300 ease">
                                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                    </span>
                                    <p class="font-medium text-base text-secondary max-w-xl transition duration-300 ease lg:text-lg">WA : 081314218843 <span>(Munif)</span></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold text-secondary">Assalamualaikum warahmatullahi wabarakatuh. Masjid Darussalam sedang dalam proses pembangunan dan renovasi, maka dari itu mari kita sama-sama meningkatkan amal ibadah kita dengan berdonasi, baik berupa material ataupun non-material. Untuk informasi lebih lanjut silahkan menghubungi salah satu nomor DKM diatas. Semoga Allah memberikan pahala yang berlipat ganda. Aamiin...</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="bg-white h-full rounded-xl shadow overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510.17996480855606!2d106.98793674640564!3d-6.361800621233132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993406f34fa8f%3A0xb1dac0152a1a634f!2sMasjid%20Darussalam%20Taman%20Rahayu%20Bekasi!5e0!3m2!1sid!2sid!4v1688642985208!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="pt-36 pb-32 bg-slate-300">
    <div class="container">
        <div class="mx-auto max-w-7xl">
            <div class="w-full mb-10 px-4">
                <h2 class="font-bold uppercase text-primary text-xl mb-3">Info Pelayanan</h2>
                <p class="font-medium text-base text-dark max-w-xl lg:text-lg">Masjid Darussalam selalu berusaha dan insyaallah istiqomah dalam memberikan pelayanan yang terbaik dan juga mengadakan kegiatan-kegiatan yang bersifat religi, berikut ini beberapa pelayanan dan kegiatan Masjid Darussalam :</p>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/7.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover" loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Melayani Zakat Fitrah</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam melayani penerimaan dan menyalurkan Zakat Fitrah pada setiap bulan Ramadhan.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/8.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover" loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Menyalurkan Hewan Kurban</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam melayani penerimaan dan menyalurkan Hewan Kurban pada setiap bulan Zulhijah.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/10.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover" loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Berbagi Takjil</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam selalu mengadakan berbuka bersama sekaligus memberikan takjil untuk para musafir.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:w-1/4">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/11.jpg') }}" alt="Gambar Zakat" class="w-full aspect-video object-cover" loading="lazy">
                        <div class="py-6 px-6">
                            <h3 class="text-xl font-semibold text-dark truncate mb-3">Pengajian Rutin</h3>
                            <p class="font-medium text-base text-secondary mb-6">Masjid Darussalam selalu mengadakan pengajian rutin setiap malam senin dengan bimbingan ustadz.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection