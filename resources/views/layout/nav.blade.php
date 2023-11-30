<div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 0)" class="pb-8">
    <header x-bind:class="{ 'bg-transparent ': scrolled, 'bg-white': !scrolled }"
        class="fixed top-0 z-10 w-full transition-all duration-300 ease-in-out backdrop-blur-lg">
        <div
            class="sticky top-0 font-[700] text-black border-w-[100px] cursor-auto outline-[100px] dark:text-white font-poppins">
            <nav
                class="flex flex-wrap items-center justify-between w-full p-4 space-x-4 text-2xl font-semibold bg-opacity-50 rounded-md smooth-link md:text-xl sticky-top-8 md:shrink-0">
                <div class="items-center justify-between">
                  <ul class="inline-flex space-x-4">
                    <li>
                    <a href="{{ route('main') }}" class="transition duration-300 group ">INFO <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-1 bg-gradient-to-r from-rose-300 via-rose-600 to-rose-700 bg-[length:100%_5px] bg-no-repeat bg-bottom "></span></a>
                          </li><li><a href="{{ route('work') }}"
                        class="inline-block text-transparent transition duration-300 group bg-gradient-to-r from-rose-400 via-pink-600 to-red-500 bg-clip-text">WORK
                        <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-1 bg-gradient-to-r from-rose-300 via-rose-600 to-rose-700 bg-[length:100%_5px] bg-no-repeat bg-bottom "></span></a>
                          </li><li><a href="{{ route('forms') }}" class="transition duration-300 group">CONTACT <span
                            class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-1 bg-gradient-to-r from-rose-300 via-rose-600 to-rose-700 bg-[length:100%_5px] bg-no-repeat bg-bottom "></span></a>
                          </li></ul>
                          </div>
                          
                
                <div class="flex order-2 px-2 py-2 mt-4 space-x-4">
                    @csrf
                  <form action="{{route('doLogout')}}" method="POST">
                <button type="submit" class="mt-2 text-2xl">Logout</button>
              
              </form>
                <button class="px-2 py-2 mb-8 rounded-md bg-gradient-to-r from-rose-400 to-red-500">
                  <a href="{{ route('posts.index') }}" class="text-white">Komentar</a>
              </button>
              </div>
            </nav>
        </div>
    </header>
</div>
