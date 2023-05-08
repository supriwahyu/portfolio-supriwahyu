  <div class="flex flex-row pt-24 px-10 pb-4">
    <div class="w-2/12 mr-6">
      <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4">
        <a href="{{ route('admin.dashboard') }}" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">dashboard</span>
          Dashboard
        </a>
        <a href="{{ route('article') }}" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">tune</span>
          Articles
        </a>
        @auth('admin')
        <a href="{{ route('portfolio') }}" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">file_copy</span>
          Portfolios
        </a>
      <!-- </div> -->

      <!-- <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4"> -->
        <a href="{{ route('user') }}" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">face</span>
          Users
        </a>
        <a href="" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">settings</span>
          Settings
        </a>
        @endauth
        @if(Auth::guard('admin')->check())
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
              Logout
          </a>    
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @elseif(Auth::guard('user')->check())
          <a href="{{ route('logoutUser') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="inline-block text-gray-600 hover:text-black my-4 w-full">
          <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
              Logout
          </a>    
          <form id="frm-logout" action="{{ route('logoutUser') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @endif
        </a>
      </div>
    </div>