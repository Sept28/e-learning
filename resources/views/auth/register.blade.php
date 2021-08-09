@extends('layouts.auth')

@section('title')
    E-learning Register
@endsection

@section('content')
    <div class="container mx-auto my-5">
      <div class="grid grid-cols-12">
        <div class="col-span-12">
          <div class="rounded-3xl mx-auto w-96 bg-white">
            <form action="{{ route('register.authenticate') }}">
              <div class="flex flex-col py-6">
              <img class="mx-auto" width="100" src="images/school-bag.png" alt="">
              <h2 class="py-3 text-2xl text-center font-extrabold">Register Now!</h2>
                <label type="text"
                      class="w-3/4 rounded-full mx-auto text-lg font-semibold"
                      for=""
                >
                      Name
                </label>
                <input type="text"
                      class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                      style="background-color: #F3F3F3"
                      name="name"
                >

                <label type="text"
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
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
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
                      for=""
                >
                      Password
                </label>
                <input type="password"
                      class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                      style="background-color: #F3F3F3"
                      name="password"
                >


                <label type="text"
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
                      for=""
                >
                      Address
                </label>
                <textarea 
                        name="address" 
                        id="" cols="30"
                        rows="5"
                        class="w-3/4 rounded mx-auto mx-auto py-2 px-5"
                        style="background-color: #F3F3F3"
                ></textarea>

                <label type="text"
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
                      for=""
                >
                      Phone Number
                </label>
                <input type="text"
                      class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                      style="background-color: #F3F3F3"
                >

                <label type="text"
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
                      for=""
                >
                      Personal Goal
                </label>
                <input type="text"
                      class="w-3/4 rounded-full border-2 mx-auto py-2 px-5" 
                      style="background-color: #F3F3F3"
                >
                <label type="text"
                      class="w-3/4 rounded-full mx-auto mt-5 text-lg font-semibold"
                      for=""
                >
                      Image
                </label>
                <input type="file"
                      class="w-3/4 mx-auto py-2"
                >

                <button type="submit" class="py-2 mt-8 w-3/4 text-white font-bold text-lg rounded-full mx-auto bg-green-500">
                      Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection