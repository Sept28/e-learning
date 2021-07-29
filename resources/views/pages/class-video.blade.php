@extends('layouts.auth')

@section('title')
    Class Video
@endsection

@section('content')
  <div class="container my-14 md:px-14 lg:px-28 mx-auto">
    <div class="row">
      <div class="col-span-3 inline-block lg:hidden">
        <div class="h-full rounded-lg">
          <div class="p-5 sticky top-32">
            <img class="rounded-lg" src="{{ asset('images/geolocation.png') }}" alt="">
            <div class="flex flex-col justify-center">
              <a href="#class" class="py-2 my-5 w-full bg-green-500 text-center text-white rounded-full">Lihat Kelas</a>
              <h6 class="font-bold py-2">Dalam kelas ini terdapat :</h6>
              <p>2 jam durasi belajar</p>
              <p>22 modul belajar</p>
              <p>212 siswa</p>
              <p>Sertifikat Digital</p>
              <p>Forum diskusi tanya jawab</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-14">
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9">
          <iframe src="videos/3.1 Cara Slicing Assets dari Figma.mp4" class="h-40 md:h-80 lg:h-445px rounded-lg" width="100%"></iframe>
          <h2 class="pt-5 text-xl font-bold">Cara Slicing Assets dari Figma</h2>
          <p>
            <b>Description</b> : Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Etiam nec diam sapien. Nulla imperdiet placerat libero, sodales molestie diam.
            Pellentesque vehicula tellus ut arcu sodales, id convallis mauris venenatis.
          </p>
          <div class="mt-10" id="class">
            <div class="p-10 bg-white rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-3xl font-bold">Basic</h1>
                <ol class="py-3 text-gray-400 font-semibold flex flex-col space-y-3" data-aos="fade-up" data-aos-delay="200">
                  <li>1. Perkenalan Kelas LaravelPerkenalan Kelas LaravelPerkenalan Kelas Laravel - HERE MapsPerkenalan Kelas Laravel - HERE Maps</li>
                  <li>2. Apa itu HERE Maps?</li>
                </ol>
            </div>
          </div>
          <div class="mt-10">
            <div class="p-10 bg-white flex rounded-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="col-span-12 md:col-span-6 lg:col-span-3 rounded-lg bg-white text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
                  <div class="md:flex md:items-center">
                    <div class="mx-auto md:mx-0 rounded-full"
                      style="width:100px;
                              height:100px;
                              background-size:cover;
                              background-image: url('{{ asset('images/review-nabilla.jpg') }}')"
                    >
                    </div>
                    <div class="py-3 md:flex md:flex-col md:py-5 md:ml-3">
                      <p class="text-2xl font-bold">Nabilla Ayu</p>
                      <div class="flex justify-center md:justify-between">
                        <img class="w-5" src="images/star.svg" alt="">
                        <img class="w-5" src="images/star.svg" alt="">
                        <img class="w-5" src="images/star.svg" alt="">
                        <img class="w-5" src="images/star.svg" alt="">
                        <img class="w-5" src="images/star.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="py-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus, erat sed dignissim varius, sapien sem suscipit mi, eget porttitor est enim sit amet lorem. Fusce iaculis suscipit elit id scelerisque. Suspendisse potenti. Fusce viverra eu turpis sed efficitur. Suspendisse potenti. Donec iaculis tortor ac mauris suscipit, ac lobortis tellus pellentesque. Sed fringilla ipsum vel quam consectetur tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec efficitur erat, at varius quam. Pellentesque id massa metus. Nullam id accumsan metus, vitae bibendum libero. 
                  </div>
                </div>
            </div>
            
          </div>
        </div>
        <div class="col-span-3 hidden lg:inline-block">
          <div class=" bg-white h-full rounded-lg">
            <div class="p-5 sticky top-32">
              <img class="rounded-lg" src="https://cdn.dribbble.com/users/5697129/screenshots/14804367/media/8062bf1c60757791c6f9a1907d8a2859.png?compress=1&resize=1200x900" alt="">
              <div class="flex flex-col justify-center">
                <a href="#class" class="py-2 my-5 w-full bg-green-500 text-center text-white rounded-full">Lihat Kelas</a>
                <h6 class="font-bold py-2">Dalam kelas ini terdapat :</h6>
                <p>2 jam durasi belajar</p>
                <p>22 modul belajar</p>
                <p>212 siswa</p>
                <p>Sertifikat Digital</p>
                <p>Forum diskusi tanya jawab</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection