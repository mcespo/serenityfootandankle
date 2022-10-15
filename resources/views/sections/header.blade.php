<header class="banner relative bg-white">
  <div class="pointer-events-none absolute inset-0 z-30 shadow" aria-hidden="true"></div>
  <div class="relative z-20">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-5 sm:px-6 sm:py-4 md:justify-start md:space-x-10 lg:px-8">
        <div>
        <a href="{{ home_url('/') }}" class="brand flex">
          <span class="sr-only">{!! $siteName !!}</span>
          <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="-my-2 -mr-2 md:hidden">
        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/bars-3 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
        @if (has_nav_menu('primary_navigation'))
          <nav class="flex space-x-10" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-10', 'echo' => false]) !!}
          </nav>
        @endif


        <nav class="flex space-x-10">
          <div>
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
              <span>Solutions</span>
              <!--
                Heroicon name: mini/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
              <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>

            <!--
              'Solutions' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 -translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 -translate-y-1"
            -->

          </div>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Pricing</a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Docs</a>
          <div>
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
              <span>More</span>
              <!--
                Heroicon name: mini/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
              <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>

            <!--
              'More' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 -translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 -translate-y-1"
            -->
            <div class="absolute inset-x-0 top-full z-10 hidden transform shadow-lg md:block">
              <div class="absolute inset-0 flex">
                <div class="w-1/2 bg-white"></div>
                <div class="w-1/2 bg-gray-50"></div>
              </div>
            </div>
          </div>
        </nav>
        <div class="flex items-center md:ml-12">
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a>
          <a href="#" class="ml-8 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
        </div>
      </div>
  </div>
</header>
