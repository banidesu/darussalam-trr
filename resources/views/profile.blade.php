@extends('layout.default')
@section('content')
<section id="profile" class="pt-36 pb-32 bg-slate-300">
    <div class="container">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 font-medium md:w-1/2 lg:text-justify text-lg">
                    <h3 class="text-4xl font-bold text-dark mb-10">Profil Masjid Darussalam</h3>
                    <p class="mb-3 lg:indent-10">Secara Perumahan Taman Rahayu Regency blok A awal berdirinya atau rencana pembangunan musholla pada tahun 2004 karena pada umumnya diperumahan taman rahayu regency belum dibangun masjid jami' atau musholla lainnya. Maka pengurus warga blok A khususnya atau RW 08 umumnya berinisiatif mengajukan ke developer / pengembang <span class="italic"> BUKAKA Realty</span> untuk membangun musholla di fasos / fasum yang ada di blok A9. Kemudian surat kita ajukan dan pada dasarnya pengembang menyetujui pembangunan sarana ibadah (mushollah) di blok A. Maka pada bulan April tahun 2004 dilakukan peletakan batu pertama dengan luas bangunan <span class="tabular-nums"> 13 x 13</span>, dengan luas tanah <span class="tabular-nums">330m<sup>2</sup></span> oleh tokoh masyarakat pak haji open dan pengurus wilayah blok A.</p>
                    <p class="mb-3 lg:indent-10">Sesuai perkembangan pembangunan di taman rahayu, maka taman rahayu berkembang menjadi 2 RW (rw 08 dan 09), kemudian RW 08 telah didirikan masjid jami' bersama rw 09. Maka Setelah musholla mengalami perkembangan kemakmuran maka didirikan TPA, disamping itu juga kegiatan pengajian lainnya. kemudian musholla darussalam direnovasi menjadi masjid tahun 2020 saat terjadi covid-19.</p>
                </div>
                <div class="w-full px-4 mb-10 font-medium md:w-1/2">
                    <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="{{ asset('img/12.jpg') }}" alt="Gambar-12" class="w-full aspect-video object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection