@extends('layouts.auth')

@section('title')
    E-learning Login
@endsection

@section('content')
    <div class="container mx-auto my-5">
      <div class="grid grid-cols-12">
        <div class="col-span-12">
          <div class="rounded-3xl mx-auto w-full md:w-96 bg-white shadow-md">
              <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="flex flex-col py-6">
                    <img class="mx-auto" width="100" src="images/school-bag.png" alt="">
                    <h2 class="py-3 text-2xl text-center font-extrabold">Login Menu</h2>
                    <label type="text"
                            class="w-3/4 rounded-full mx-auto text-lg font-semibold"
                            for=""
                    >
                            Email
                    </label>
                    <input type="email"
                            autofocus
                            class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                            style="background-color: #F3F3F3"
                            name="email"
                    >

                    <label type="text"
                            class="w-3/4 rounded-full mx-auto mt-2 text-lg font-semibold"
                            for=""
                    >
                            Password
                    </label>
                    <input type="password"
                            class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                            style="background-color: #F3F3F3"
                            name="password"
                    >

                    <div class="border my-5 w-8/12 rounded-full mx-auto"></div>

                    <button class="py-2 w-3/4 text-white font-bold text-lg rounded-full mx-auto bg-green-500">
                            Login
                    </button>

                    <a href="{{ route('auth.register') }}" class="py-2 w-3/4 text-white font-bold text-center text-lg rounded-full mx-auto bg-green-500 mt-3">Register</a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection