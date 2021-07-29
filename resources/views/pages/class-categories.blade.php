@extends('layouts.app')

@section('title')
    Class Categories
@endsection

@section('content')
    <div class="container my-10 md:px-14 lg:px-28 mx-auto">
        <div class="row">
            <div class="grid grid-cols-12 gap-4">
                {{-- Search --}}
                <div class="col-span-12 flex justify-center text-3xl font-bold">Categories name</div>

                {{-- All Class --}}
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="100">
                  <a href="{{ url('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/category.png') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="200">
                  <a href="{{ url('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/category2.png') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase') > 5 ? substr('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="300">
                  <a href="{{ url('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/category.jpg') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Laravel 8x Fundamental Laravel 8x Fundamental with this e-learning') > 5 ? substr('Laravel 8x Fundamental with this e-learning',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">48 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="400">
                  <a href="{{ url('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/category4.png') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
            </div>
        <!-- component -->
        <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center mt-10" aria-label="Pagination">
            <a class="flex w-10 h-10 mr-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Previous Page">
                <span class="sr-only">Previous Page</span>
                <svg class="block w-4 h-4 fill-current" viewBox="0 0 256 512" aria-hidden="true" role="presentation">
                    <path d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                </svg>
            </a>
            <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Page 1">
                1
            </a>
            <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Page 2">
                2
            </a>
            <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-black bg-black text-white pointer-events-none" href="#" aria-current="page" title="Page 3">
                3
            </a>
            <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Page 4">
                4
            </a>
            <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Page 5">
                5
            </a>
            <a class="flex w-10 h-10 ml-1 justify-center items-center rounded-full border border-gray-200 bg-white text-black hover:border-gray-300" href="#" title="Next Page">
                <span class="sr-only">Next Page</span>
                <svg class="block w-4 h-4 fill-current" viewBox="0 0 256 512" aria-hidden="true" role="presentation">
                    <path d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                </svg>
            </a>
        </nav>
    </div>
@endsection