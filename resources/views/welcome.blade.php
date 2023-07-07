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
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Lokasi Masjid Darussalam</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Kota Bekasi</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Perum. Taman Rahayu Regency, Kec. Bantar Gebang, Kel. Ciketing Udik, Kota Bekasi, Jawa Barat</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="bg-white h-full rounded-xl shadow overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510.17996480855606!2d106.98793674640564!3d-6.361800621233132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993406f34fa8f%3A0xb1dac0152a1a634f!2sMasjid%20Darussalam%20Taman%20Rahayu%20Bekasi!5e0!3m2!1sid!2sid!4v1688642985208!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection