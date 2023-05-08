@extends('general.master')
@section('title')
    Home
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center lg:text-left">
    <style>
      @media (min-width: 992px) {
        .rotate-lg-6 {
          transform: rotate(6deg);
        }
      }

      /* These are the KEY styles - you can add them directly to any object you want in your project */
      .fancy-border-radius {
        border-radius: 53% 47% 52% 48% / 36% 41% 59% 64%;
      }
    </style>

    <!-- Jumbotron -->
    <div class="container mx-auto xl:px-32 text-center lg:text-left">
      <div class="grid lg:grid-cols-2 flex items-center">
        <div class="mb-12 lg:mb-0">
          <div
            class="relative block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
            style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1"
          >
            <h2 class="text-3xl font-bold mb-4 display-5">Why is it so great?</h2>
            <p class="text-gray-500 mb-12">
              Nunc tincidunt vulputate elit. Mauris varius purus malesuada neque iaculis
              malesuada. Aenean gravida magna orci, non efficitur est porta id. Donec magna
              diam.
            </p>

            <div class="grid md:grid-cols-3 gap-x-6">
              <div class="mb-12 md:mb-0">
                <h2 class="text-3xl font-bold text-dark mb-4">10%</h2>
                <h5 class="text-lg font-medium text-gray-500 mb-0">Less sugar</h5>
              </div>

              <div class="mb-12 md:mb-0">
                <h2 class="text-3xl font-bold text-dark mb-4">70%</h2>
                <h5 class="text-lg font-medium text-gray-500 mb-0">More flavor</h5>
              </div>

              <div class="">
                <h2 class="text-3xl font-bold text-dark mb-4">0%</h2>
                <h5 class="text-lg font-medium text-gray-500 mb-0">Gluten</h5>
              </div>
            </div>
          </div>
        </div>

        <div>
          <img
            src="{{asset('img/wallhaven-k7yvzm.jpg')}}"
            class="w-full shadow-lg fancy-border-radius rotate-lg-6"
            alt=""
          />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

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
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

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
  <!-- Section: Design Block -->
  
</div>
<!-- Container for demo purpose -->

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32">
    <style>
      @media (min-width: 992px) {
        #cta-img-nml-50 {
          margin-left: 50px;
        }
      }
    </style>

    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 mb-12 lg:mb-0">
        <div class="flex lg:py-12">
          <img src="{{asset('img/e177fb5c801fe05aef7b729fa4f5096d.jpg')}}" class="w-full rounded-lg shadow-lg"
            id="cta-img-nml-50" style="z-index: 10" alt="" />
        </div>
      </div>

      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div
          class="bg-yellow-500 h-full rounded-lg p-6 lg:pl-12 text-white flex items-center text-center lg:text-left">
          <div class="lg:pl-12">
            <h2 class="text-3xl font-bold mb-6">Let it surprise you</h2>
            <p class="mb-6 pb-2 lg:pb-0">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, sint, repellat
              vel quo quisquam accusamus in qui at ipsa enim quibusdam illo laboriosam omnis.
              Labore itaque illum distinctio eum neque!
            </p>

            <div class="flex flex-col md:flex-row md:justify-around xl:justify-start mb-6 mx-auto">
              <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                  <path fill="currentColor"
                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                  </path>
                </svg>
                Best team
              </p>

              <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                  <path fill="currentColor"
                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                  </path>
                </svg>
                Best quality
              </p>

              <p class="flex items-center mb-2 lg:mb-0 mx-auto md:mx-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                  <path fill="currentColor"
                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                  </path>
                </svg>
                Best experience
              </p>
            </div>

            <p>
              Duis sagittis, turpis in ullamcorper venenatis, ligula nibh porta dui, sit amet
              rutrum enim massa in ante. Curabitur in justo at lorem laoreet ultricies. Nunc
              ligula felis, sagittis eget nisi vitae, sodales vestibulum purus. Vestibulum nibh
              ipsum, rhoncus vel sagittis nec, placerat vel justo. Duis faucibus sapien eget
              tortor finibus, a eleifend lectus dictum. Cras tempor convallis magna id rhoncus.
              Suspendisse potenti. Nam mattis faucibus imperdiet. Proin tempor lorem at neque
              tempus aliquet. Phasellus at ex volutpat, varius arcu id, aliquam lectus.
              Vestibulum mattis felis quis ex pharetra luctus. Etiam luctus sagittis massa, sed
              iaculis est vehicula ut.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
@endsection

