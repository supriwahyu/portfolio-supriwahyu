@extends('general.master')
@section('title')
    Articles
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center">

    <h2 class="text-3xl font-bold mb-12 pb-4 text-center">Latest articles</h2>

    <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
      @foreach ($articles as $article)
      <div class="mb-6 lg:mb-0">
        <div class="relative block bg-white rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="{{ asset('img/article/'.$article->image_url) }}" class="object-cover h-48 w-96" />
              <a href="{{ route('show.article', $article->id) }}">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
          
          <div class="p-6">
            <h5 class="font-bold text-lg mb-3">{{ $article->title }}</h5>
            <p class="text-gray-500 mb-4">
              <small>Published <u>{{ $article->created_at }}</u> by
                <a href="" class="text-gray-900">{{ $article->writer }}</a></small>
            </p>
            <p class="truncate mb-4 pb-2">
              {{ $article->body }}
            </p>
            <a href="{{ route('show.article', $article->id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
              more</a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- <div class="mb-6 lg:mb-0">
        <div class="relative block bg-white rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="font-bold text-lg mb-3">Travel to Italy</h5>
            <p class="text-gray-500 mb-4">
              <small>Published <u>12.01.2022</u> by
                <a href="" class="text-gray-900">Halley Frank</a></small>
            </p>
            <p class="mb-4 pb-2">
              Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
              diam orci, nec ornare metus semper sed. Integer volutpat
              ornare erat sit amet rutrum.
            </p>
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
              more</a>
          </div>
        </div>
      </div>

      <div class="mb-0">
        <div class="relative block bg-white rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="font-bold text-lg mb-3">Chasing the sun</h5>
            <p class="text-gray-500 mb-4">
              <small>Published <u>10.01.2022</u> by
                <a href="" class="text-gray-900">Joe Svan</a></small>
            </p>
            <p class="mb-4 pb-2">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
              more</a>
          </div>
        </div>
      </div>
    </div> -->

  </section>
@endsection

