@extends('layout.default')
@section('content')
<section id="profile" class="pt-36 pb-32 bg-slate-300">
    <div class="container">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 font-medium md:w-1/2">
                    <h3 class="text-4xl font-bold text-dark mb-10">Sejarah Masjid Darussalam</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ullam eligendi exercitationem labore sint minus dolor voluptas eveniet voluptatum nisi, similique alias dolores amet, reiciendis perspiciatis ea fugiat numquam facilis officia consectetur, sunt vitae. At, sit accusantium? Repellat vero quisquam neque, a, culpa nostrum, fugit voluptatum doloribus sapiente libero unde.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore temporibus, ex enim veniam consectetur soluta placeat dolor recusandae exercitationem nostrum magnam sit doloribus porro consequuntur voluptate molestias in perspiciatis omnis, odit ipsa veritatis! Quod labore, provident, molestias vero accusantium cupiditate dolorum ullam deleniti totam atque impedit. Illum ad ipsa saepe ipsam! Consequatur voluptatem ipsa neque explicabo cumque!</p>
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