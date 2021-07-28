@extends('layouts.app')

@section('title')
    All Class
@endsection

@section('content')
    <div class="container my-14 md:px-14 lg:px-28 mx-auto">
        <div class="row">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 py-4 md:w-1/2 mx-auto text-center text-3xl font-bold">Kelas Online dengan Kurikulum Standar Kompetensi Kerja</div>

                {{-- Category --}}
                <div class="col-span-12 text-xl font-bold text-center md:text-left">Pilih Kelas Berdasarkan Category</div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="100">
                  <div class="rounded-xl p-8">
                    <a href="/class-categories">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/6033/screenshots/14177505/media/054293e33b67fb146dee1f1b418e1e9a.png?compress=1&resize=1200x900" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Web Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="200">
                  <div class="rounded-xl p-8">
                    <a href="/class-categories">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/1957569/screenshots/13914195/media/22ea30f7ddcb1cea18401b6e7cfff9ea.png?compress=1&resize=800x600" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Android Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="300">
                  <div class="rounded-xl p-8">
                    <a href="/class-categories">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/60266/screenshots/12347193/media/4927e9d26ebd2c22d3033c6c8439a2af.jpg?compress=1&resize=1200x900" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Ios Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="400">
                  <div class="rounded-xl p-8">
                     <a href="/class-categories">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/231966/screenshots/6171302/react.png?compress=1&resize=800x600" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Fullstack Developer</h2>
                     </a>
                   </div>
                </div>

                {{-- Search --}}
                <div class="col-span-12 mt-20 flex justify-center">
                    <!-- component -->
                    <div class="md:w-1/2 relative text-gray-600" data-aos="fade-up">
                    <input type="search" name="search" placeholder="Cari kelas..." class="bg-white h-14 px-5 pr-10 rounded-full text-sm focus:outline-none w-full">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                    </button>
                    </div>
                </div>

                {{-- All Class --}}
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="100">
                  <a href="/class-video">
                    <img class="rounded-xl" src="https://cdn.dribbble.com/users/5697129/screenshots/14804367/media/8062bf1c60757791c6f9a1907d8a2859.png?compress=1&resize=1200x900" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="200">
                  <a href="/class-video">
                    <img class="rounded-xl" src="https://cdn.dribbble.com/users/2564256/screenshots/16008655/media/afc53070b17e9968d169688018f99cf2.png?compress=1&resize=1200x900" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase') > 5 ? substr('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="300">
                  <a href="/class-video">
                    <img class="rounded-xl" src="https://cdn.dribbble.com/users/66340/screenshots/7499880/media/5983ca57143885c0eb39af49e8a12f63.jpg?compress=1&resize=1200x900" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Laravel 8x Fundamental Laravel 8x Fundamental with this e-learning') > 5 ? substr('Laravel 8x Fundamental with this e-learning',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">48 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="400">
                  <a href="/class-video">
                    <img class="rounded-xl" src="https://cdn.dribbble.com/users/5697129/screenshots/14804367/media/8062bf1c60757791c6f9a1907d8a2859.png?compress=1&resize=1200x900" alt="">
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
    </div>
@endsection