@extends('general.master')
@section('title')
    Portfolios
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
<!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">
    <style>
      .zoom:hover img {
        transform: scale(1.1);
      }
    </style>

    <h2 class="text-3xl font-bold mb-12 text-center">
      Projects we are<u class="text-blue-600"> proud of</u>
    </h2>

    <div class="grid lg:grid-cols-3 gap-6">
      @foreach ($portfolios as $portfolio)
      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('img/portfolio/'.$portfolio->image_url) }}"
          class="w-full transition duration-300 ease-linear align-middle object-cover h-52 w-96" />
        <a href="{{ route('show.portfolio', $portfolio->id) }}">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">{{ $portfolio->title }}</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>
      @endforeach
      <!-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
          class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Genius Loci</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="https://mdbootstrap.com/img/new/standard/city/045.jpg"
          class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Big Apple</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="https://mdbootstrap.com/img/new/standard/city/047.jpg"
          class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Sun City</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="https://mdbootstrap.com/img/new/standard/city/048.jpg"
          class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Paris flavor</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="https://mdbootstrap.com/img/new/standard/city/049.jpg"
          class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Sky is the limit</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>
    </div> -->
      </section>
    @endsection