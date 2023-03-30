<nav id="header" class="fixed w-full z-30 top-0 text-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
        <!--Icon from: http://www.potlabicons.com/ -->
        {{-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
          <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
        </svg> --}}
        <img height="190" width="140" src="assets/ac/logo.png">
      </a>
    </div>
    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center p-1 text-white-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Home</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#Pelayanan">Pelayanan</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#harga">Harga</a>
        </li>
      </li>
      <li class="mr-3">
        <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#Gallery">Gallery</a>
      </li>
        <li class="mr-3">
          <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#Kontak">Kontak</a>
        </li>
      </ul>
      <a button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="/login" >
          Masuk
      </a>
    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>