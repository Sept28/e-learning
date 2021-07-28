@extends('layouts.app')

@section('title')
    Class Map
@endsection

@section('content')
    <div class="container my-14 md:px-14 lg:px-28 mx-auto">
        <div class="row">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 py-4 md:w-1/2 mx-auto text-center text-3xl font-bold">Kelas Online dengan Kurikulum Standar Kompetensi Kerja</div>

                {{-- Category --}}
                <div class="col-span-12 text-xl font-bold text-center md:text-left">Belajar lebih terstruktur dengan kelas pilihan</div>
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
            </div>
        </div>
    </div>
@endsection