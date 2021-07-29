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
                    <a href="{{ url('/class-categories') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category.png') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Web Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="200">
                  <div class="rounded-xl p-8">
                    <a href="{{ url('/class-categories') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category2.png') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Android Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="300">
                  <div class="rounded-xl p-8">
                    <a href="{{ url('/class-categories') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category3.jpg') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Ios Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="400">
                  <div class="rounded-xl p-8">
                     <a href="{{ url('/class-categories') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category4.png') }}" alt="">
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
                  <a href="{{ asset('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/laravel.jpg') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="200">
                  <a href="{{ asset('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/laravel.jpg') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase') > 5 ? substr('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="300">
                  <a href="{{ asset('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/laravel.jpg') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Laravel 8x Fundamental Laravel 8x Fundamental with this e-learning') > 5 ? substr('Laravel 8x Fundamental with this e-learning',0 ,35)."..." : null ?></h2>
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">48 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="400">
                  <a href="{{ asset('/class-video') }}">
                    <img class="rounded-xl" src="{{ asset('images/laravel.jpg') }}" alt="">
                    <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
                  </a>
                  <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
                  <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
                </div>
                
            </div>

            <!-- Pagination -->
            <div id="wrapper">
              <section>
                  <div class="data-container"></div>
                  <div id="pagination-demo1"></div>
                  <div class="data-container"></div>
                  <div id="pagination-demo2"></div>
              </section>
          </div>

        </div>
    </div>
@endsection