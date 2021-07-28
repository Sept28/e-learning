@extends('layouts.app')

@section('title')
    E-learning
@endsection

@section('content')
<div class="container mt-24 md:px-14 lg:px-28 mx-auto">
  <div class="row">
    <div class="grid grid-cols-12">
      <div class="col-span-12 lg:col-span-6 my-auto text-center lg:text-left" data-aos="fade-right">
        <h2 class="text-4xl font-bold leading-normal">Belajar Coding dengan Standar Kompetensi Kerja</h2>
        <p class="py-5 text-lg text-gray-600 leading-relaxed mx-auto lg:w-9/12 lg:m-0">
          Kembangkan karirmu sebagai developer
          profesional dengan keahlian coding yang
          dibutuhkan di dunia industri melalui kelas online
          kami
        </p>
        <div class="py-5 lg:hidden" data-aos="fade-right" data-aos-delay="100">
          <img class="mx-auto" src="images/banner_education.svg" alt="">
        </div>
        <div class="flex text-white mt-5 md:mt-10 lg:mt-5">
          <a href="/all-class" class="rounded-full px-5 py-3 bg-green-500 mx-auto lg:mx-0">Lihat Kelas</a>
          <a href="/class-categories" class="rounded-full px-5 py-3 bg-green-500 mx-auto lg:mx-0 lg:ml-5">Kelas Pilihan</a>
        </div>
      </div>
      <div class="hidden lg:inline-block lg:col-span-6" data-aos="fade-left" data-aos-delay="200">
        <img class="mx-auto" src="images/banner_education.svg" alt="">
      </div>
    </div>
  </div>
</div>

{{-- Aktif member --}}
<div class="grid grid-cols-12 bg-green-600 mt-20 count" id="count">
  <div class="col-span-12 font-semibold container md:px-14 lg:px-28 mx-auto flex justify-around flex-wrap">
    <div class="p-10 text-white text-center">
      <span class="text-4xl leading-normal counter">201.132</span>
      <p class="text-sm">Member Aktif</p>
    </div>
    <div class="p-10 text-white text-center">
      <span class="text-4xl leading-normal counter">119</span>
      <p class="text-sm">Kelas Online</p>
    </div>
    <div class="p-10 text-white text-center">
      <span class="text-4xl leading-normal counter">1.209</span>
      <p class="text-sm">Materi Belajar</p>
    </div>
    <div class="p-10 text-white text-center">
      <span class="text-4xl leading-normal counter">500</span>
      <p class="text-sm">Jam Pelajaran</p>
    </div>
  </div>
</div>

<div class="container mt-32 md:px-14 lg:px-28 mx-auto">
  {{-- Popular Class --}}
  <div class="row">
    <div class="grid grid-cols-12 gap-4"> 
      <div class="col-span-12 text-center text-3xl font-bold">Kelas Online Populer</div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="100">
        <a href="/class-video">
          <img class="rounded-xl" src="https://cdn.dribbble.com/users/5697129/screenshots/14804367/media/8062bf1c60757791c6f9a1907d8a2859.png?compress=1&resize=1200x900" alt="">
          <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps') > 5 ? substr('Studi Kasus Web Geolocation dengan Laravel dan HERE Maps',0 ,30)."..." : null ?></h2>  
        </a>
        <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
        <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
      </div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="200">
        <a href="/class-video">
          <img class="rounded-xl" src="https://cdn.dribbble.com/users/2564256/screenshots/16008655/media/afc53070b17e9968d169688018f99cf2.png?compress=1&resize=1200x900" alt="">
          <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase') > 5 ? substr('Membuat Aplikasi E-learning di Android menggunakan Realtime Firebase',0 ,35)."..." : null ?></h2>
        </a>
        <p class="py-3 text-gray-400 text-md font-semibold">15 modul</p>
        <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
      </div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-xl p-5" data-aos="fade-up" data-aos-delay="300">
        <a href="/class-video">
          <img class="rounded-xl" src="https://cdn.dribbble.com/users/66340/screenshots/7499880/media/5983ca57143885c0eb39af49e8a12f63.jpg?compress=1&resize=1200x900" alt="">
          <h2 class="pt-3 text-lg font-semibold leading-snug"><?= str_word_count('Laravel 8x Fundamental Laravel 8x Fundamental with this e-learning') > 5 ? substr('Laravel 8x Fundamental with this e-learning',0 ,35)."..." : null ?></h2>
        </a>
        <p class="py-3 text-gray-400 text-md font-semibold">48 modul</p>
        <p>Description : <?= str_word_count('Lorem Ipsum is simply dummy text of the printing and typesetting industry') > 5 ? substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry',0 ,70)."..." : null ?></p>
      </div>
    </div>
  </div>

  {{-- Category --}}
  <div class="row mt-14">
    <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 text-xl font-bold text-center md:text-left">Pilih Kelas Berdasarkan Category</div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-up" data-aos-delay="100">
      <div class="rounded-xl p-8">
        <a href="/class-categories">
          <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/6033/screenshots/14177505/media/054293e33b67fb146dee1f1b418e1e9a.png?compress=1&resize=1200x900" alt="">
          <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Web Developer</h2>
        </a>
    </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-up" data-aos-delay="200">
      <div class="rounded-xl p-8">
        <a href="/class-categories">
          <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/1957569/screenshots/13914195/media/22ea30f7ddcb1cea18401b6e7cfff9ea.png?compress=1&resize=800x600" alt="">
          <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Android Developer</h2>
        </a>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-up" data-aos-delay="300">
      <div class="rounded-xl p-8">
        <a href="/class-categories">
          <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/60266/screenshots/12347193/media/4927e9d26ebd2c22d3033c6c8439a2af.jpg?compress=1&resize=1200x900" alt="">
          <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Ios Developer</h2>
        </a>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white" data-aos="fade-up" data-aos-delay="400">
        <div class="rounded-xl p-8">
          <a href="/class-categories">
            <img class="mx-auto md:mx-0 rounded-xl w-full lg:w-1/2" src="https://cdn.dribbble.com/users/231966/screenshots/6171302/react.png?compress=1&resize=800x600" alt="">
            <h2 class="pt-5 text-center md:text-left font-semibold leading-snug">Fullstack Developer</h2>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Ads 1--}}
  <div class="row mt-32">
    <div class="grid grid-cols-12">
      <div class="col-span-12 lg:col-span-6 my-auto text-center lg:text-left" data-aos="fade-up-right" data-aos-delay="200">
        <h2 class="text-4xl font-semibold leading-normal">Belajar Coding 100% Lebih Cepat dan Terarah</h2>
        <p class="py-5 text-lg text-gray-600 leading-relaxed mx-auto lg:w-9/12 lg:m-0">
          Bagaimana jika kamu bisa menghemat waktu
          belajarmu dan biarkan kami menyiapkan alur belajar
          terbaik untukmu? 100% lebih terarah.
        </p>
        <div class="py-5 lg:hidden" data-aos="fade-up-left" data-aos-delay="100">
          <img class="mx-auto" src="images/undraw_programming_2svr.svg" alt="">
        </div>
      </div>
      <div class="hidden lg:flex lg:col-span-6" data-aos="fade-up-left" data-aos-delay="100">
        <img class="mx-auto" src="images/undraw_programming_2svr.svg" alt="">
      </div>
    </div>
  </div>

  {{-- Ads 2 --}}
  <div class="row mt-32">
    <div class="grid grid-cols-12">
      <div class="hidden lg:flex lg:col-span-6" data-aos="fade-up-right" data-aos-delay="100">
        <img class="mx-auto" src="images/undraw_season_change_f99v.svg" alt="">
      </div>
      <div class="col-span-12 lg:col-span-6 my-auto text-center lg:text-right" data-aos="fade-up-left" data-aos-delay="200">
        <div class="lg:w-11/12 lg:ml-auto">
          <h2 class="text-4xl font-semibold leading-normal">Kamu yang Tentukan Sendiri Waktu Belajarmu</h2>
          <p class="py-5 text-lg text-gray-600 leading-relaxed mx-auto lg:w-10/12 lg:mr-0">
          Tak perlu khawatir dengan aktivitasmu saat ini.
          Bekerja, kuliah ataupun sekolah? Kamu bisa ikut
          belajar di sini.
          </p>
        </div>
        <div class="py-5 lg:hidden">
          <img class="mx-auto" src="images/undraw_season_change_f99v.svg" data-aos="fade-up-right" data-aos-delay="100">
        </div>
      </div>
    </div>
  </div>

    {{-- Ads 3--}}
  <div class="row mt-32">
    <div class="grid grid-cols-12">
      <div class="col-span-12 lg:col-span-6 my-auto text-center lg:text-left" data-aos="fade-up-right" data-aos-delay="200">
        <h2 class="text-4xl font-semibold leading-normal lg:w-11/12">Belajar Langsung dari Project Studi Kasus</h2>
        <p class="py-5 text-lg text-gray-600 leading-relaxed mx-auto lg:w-10/12 lg:m-0">
          Tidak hanya membahas teori, di sini kamu juga akan
          belajar bagaimana caranya menggunakan teknologi
          yang sedang kamu pelajari dalam sebuah project
          nyata.
        </p>
        <div class="py-5 lg:hidden" data-aos="fade-up-left" data-aos-delay="100">
          <img class="mx-auto" src="images/blogging.svg" alt="">
        </div>
      </div>
      <div class="hidden lg:flex lg:col-span-6" data-aos="fade-up-left" data-aos-delay="100">
        <img class="mx-auto" src="images/blogging.svg" alt="">
      </div>
    </div>
  </div>

  {{-- Ads 4 --}}
  <div class="row mt-32">
    <div class="grid grid-cols-12">
      <div class="hidden lg:flex lg:col-span-6" data-aos="fade-up-right" data-aos-delay="100">
        <img class="mx-auto" src="images/game.svg" alt="">
      </div>
      <div class="col-span-12 lg:col-span-6 my-auto text-center lg:text-right" data-aos="fade-up-left" data-aos-delay="200">
        <div class="lg:w-11/12 lg:ml-auto">
          <h2 class="text-4xl font-semibold leading-normal">Belajar Coding Asyik Seperti Bermain Game</h2>
          <p class="py-5 text-lg text-gray-600 leading-relaxed mx-auto lg:w-10/12 lg:mr-0">
          Belajar coding juga bisa menyenangkan seperti
          bermain game online. Selesaikan misi, kumpulkan
          point dan tingkatkan rank belajarmu. Kapan lagi
          push rank bisa sambil belajar dan meningkatkan skill
          coding.
          </p>
        </div>
        <div class="py-5 lg:hidden" data-aos="fade-up-right" data-aos-delay="100">
          <img class="mx-auto" src="images/game.svg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-32">
    <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 text-3xl font-bold text-center md:text-left">Kenapa harus belajar disini?</div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="100">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_studikasus.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Studi Kasus</h2>
        <p>Kita akan belajar membangun sebuah real-world project di bidang IT </p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="200">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_konsultasi.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Konsultasi</h2>
        <p>Gabung dengan private group untuk berkonsultasi dengan mentor kelas </p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="300">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_access.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Lifetime Access</h2>
        <p>Mempelajari dan memahami materi kelas lebih santai tanpa batasan waktu </p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="400">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_project.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Portofolio</h2>
        <p>Pelajari dan miliki hasil karya untuk membangun karir masa depan </p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="500">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_design.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Pixel Maters</h2>
        <p>Projek kelas yang kita bangun memiliki konsep design yang baik</p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="600">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_offline.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Offline Mode</h2>
        <p>Pelajari materi kelas tanpa harus terhubung dengan Internet</p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="700">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_bahasa.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Produk Lokal</h2>
        <p>Materi dibuat langsung oleh para kreator di negara Indonesia </p>
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 lg:col-span-3 bg-white rounded-xl" data-aos="flip-right" data-aos-delay="800">
      <div class="rounded-xl p-8 text ">
        <img class="mx-auto md:mx-0 rounded-xl w-1/2" src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg" alt="">
        <h2 class="py-5 text-center md:text-left font-semibold text-xl leading-tight">Bersertifikat Resmi</h2>
        <p>Selesaikan kelas dan projek dan dapatkan sertifikat dari kami </p>
      </div>
    </div>
    </div>
  </div>

    {{-- Suggestion --}}
  <div class="row mt-32">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 text-3xl font-bold text-center md:text-left">Kenapa Harus Belajar di Sini?</div>
      <div class="col-span-12 md:col-span-6 lg:col-span-3 rounded-xl p-8 bg-white text-center md:text-left" data-aos="flip-right" data-aos-delay="200">
        <div class="rounded-full mx-auto md:mx-0"
            style="width:70px;
                    height:70px;
                    background-position: center;
                    background-size:cover;
                    background-image: url('https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=579&q=80')">
        </div>
        <h2 class="pt-5 text-xl font-bold leading-snug">Bruce Mars</h2>
        <p class="text-sm text-gray-400">Fullstack Developer</p>
        <p class="py-5 leading-relaxed">Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. </p>
        <div class="flex justify-between">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 lg:col-span-3 rounded-xl p-8 bg-white text-center md:text-left" data-aos="flip-right" data-aos-delay="400">
        <div class="rounded-full mx-auto md:mx-0"
            style="width:70px;
                    height:70px;
                    background-position: center;
                    background-size:cover;
                    background-image: url('https://images.unsplash.com/photo-1589386417686-0d34b5903d23?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
        </div>
        <h2 class="pt-5 text-xl font-bold leading-snug">Umar</h2>
        <p class="text-sm text-gray-400">Fullstack Developer</p>
        <p class="py-5 leading-relaxed">Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. </p>
        <div class="flex justify-between">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 lg:col-span-3 rounded-xl p-8 bg-white text-center md:text-left" data-aos="flip-right" data-aos-delay="600">
        <div class="rounded-full mx-auto md:mx-0"
            style="width:70px;
                    height:70px;
                    background-size:cover;
                    background-image: url('https://1.bp.blogspot.com/-Vx5hYRH7ALw/Xt5Xjd5izFI/AAAAAAAABuQ/v7YLf-IpQj4E1VbI6qoSLoeAhk5T8GawwCNcBGAsYHQ/s1600/nblh_ayu_vienalatte_16.jpg')">
        </div>
        <h2 class="pt-5 text-xl font-bold leading-snug">Nabilla Ayu</h2>
        <p class="text-sm text-gray-400">Fullstack Developer</p>
        <p class="py-5 leading-relaxed">Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. </p>
        <div class="flex justify-between">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 lg:col-span-3 rounded-xl p-8 bg-white text-center md:text-left" data-aos="flip-right" data-aos-delay="800">
        <div class="rounded-full mx-auto md:mx-0"
            style="width:70px;
                    height:70px;
                    background-size:cover;
                    background-image: url('https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1579254709/ii5pzyzvwq4myda8xmyl.jpg')">
        </div>
        <h2 class="pt-5 text-xl md:text-left font-bold leading-snug">Melody Nurramdhani</h2>
        <p class="text-sm text-gray-400">Fullstack Developer</p>
        <p class="py-5 leading-relaxed">Mentornya keren cara menyampaikan setiap materinya juga detail dan mudah dipahami. </p>
        <div class="flex justify-between">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
          <img class="w-1/6" src="images/star.svg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="row py-32">
    <div class="grid grid-cols-12">
      <div class="col-span-12" data-aos="fade-up" data-aos-delay="100">
        <img class="pb-4 w-1/2 md:w-1/4 mx-auto" src="https://buildwithangga.com/themes/front/images/ic_mentor.svg" alt="">
        <h2 class="py-4 text-4xl text-center font-semibold">Tertarik untuk belajar?</h2>
        <p class="mx-auto text-center text-lg md:w-10/12 lg:w-5/12">
          Belajar langsung dari mentor berpengalaman
          di bidangnya tanpa batas waktu
        </p>
        <div class="pt-8 flex justify-center">
          <a href="/all-class" class="mx-auto text-white rounded-full px-16 py-3 bg-green-500">Lihat Kelas</a>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection