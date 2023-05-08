<div class="bg-blue-600 min-h-screen">
  <div class="fixed bg-white text-blue-800 px-10 py-1 z-10 w-full">
      <div class="flex items-center justify-between py-2 text-5x1">
        <div class="font-bold text-blue-900 text-xl">Admin<span class="text-orange-600">Panel</span>
        <a class="font-bold text-black text-xl pl-10" href="{{ route('home') }}">Home</a></div>
        <div class="flex items-center text-gray-500">
          <!-- <span class="material-icons-outlined p-2" style="font-size: 30px">search</span>
          <span class="material-icons-outlined p-2" style="font-size: 30px">notifications</span> -->
          <div class="bg-center bg-cover bg-no-repeat inline-block">
            @if(Auth::guard('admin')->check())
                Hello {{Auth::guard('admin')->user()->name}}
            @elseif(Auth::guard('user')->check())
                Hello {{Auth::guard('user')->user()->name}}
            @endif
          </div>
        </div>
    </div>
</div>