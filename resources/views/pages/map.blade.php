@extends('layouts.app')

@section('title')
    Class Map
@endsection

@section('content')
    <div class="container my-14 md:px-14 lg:px-28 mx-auto">
        <div class="row">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 py-4 md:w-1/2 mx-auto text-center text-3xl font-bold">Kelas Online dengan Alur Belajar yang sangat terarah</div>

                {{-- Category --}}
                <div class="col-span-12 text-xl font-bold text-center md:text-left">Belajar lebih terstruktur dengan kelas pilihan</div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="100">
                  <div class="rounded-xl p-8">
                    <a href="{{ url('/class-map') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category.png') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Web Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="200">
                  <div class="rounded-xl p-8">
                    <a href="{{ url('/class-map') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category2.png') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Android Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="300">
                  <div class="rounded-xl p-8">
                    <a href="{{ url('/class-map') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category3.jpg') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Ios Developer</h2>
                    </a>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-right" data-aos-delay="400">
                  <div class="rounded-xl p-8">
                     <a href="{{ url('/class-map') }}">
                      <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="{{ asset('images/category4.png') }}" alt="">
                      <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Fullstack Developer</h2>
                     </a>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection