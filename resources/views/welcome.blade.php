<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      
      E-SERVICE 
    </title>
    
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    @include('layouts.landing-page.stylesheet')

  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    
    @include('layouts.landing-page.navbar')

    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-center text-center md:text-center">
          {{-- <p class="uppercase tracking-loose w-full">What business are you?</p> --}}
          <h1 class="my-4 text-5xl font-bold leading-tight">
            SELAMAT DATANG
          </h1>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            DI E-SERVICE !
          </h1>
          {{-- <p class="leading-normal text-2xl mb-8">
            Sub-hero message, not too long and not too short. Make it just right!
          </p> --}}
         
          <br><br><br>
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="bg-white border-b py-8">
      <div class="container max-w-4xl mx-auto m-8">
        <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
          Kami dapat melayani permasalahan pada AC anda
        </h2>
        <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
          Cuci dan Service Oleh Teknisi terbaik
        </h2>
        
        
            
              <br />

    </section>
    <section class="bg-white border-b py-8 " id="Mitra">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Ingin bergabung jadi mitra?
        </h2>
      </div>
    </section>
    <section class="bg-white border-b py-8" id="Pelayanan">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12" >
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Pelayanan Kami
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
               
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Cuci AC
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Jika AC di rumah anda kotor kami datang untuk membersihkan kotoran tersebut dengan teknisi yang handal dan tersertifikasi
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://drive.google.com/drive/folders/1GqaCzvSu8I_GTSV6pKC0zunQ0aTlqmbz?usp=share_link">Pesan Sekarang</a>
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Perbaikan AC
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Jika AC di rumah anda rusak kami datang untuk memperbaiki kerusakan tersebut dengan teknisi yang handal dan tersertifikasi
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://drive.google.com/drive/folders/1GqaCzvSu8I_GTSV6pKC0zunQ0aTlqmbz?usp=share_link">Pesan Sekarang</a>
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Bongkar Pasang AC
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                
                Jika AC di rumah anda rusak kami datang untuk memperbaiki kerusakan tersebut dengan teknisi yang handal dan tersertifikasi              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="https://drive.google.com/drive/folders/1GqaCzvSu8I_GTSV6pKC0zunQ0aTlqmbz?usp=share_link">Pesan Sekarang</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray-100 py-8">
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800" id="harga">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Harga
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Perbaikan AC
              </div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Berlaku untuk kapasitas 0.5 - 1.5 PK</li>
                <li class="border-b py-4">Gratis konsultasi dengan ahli di bidang AC</li>
                <li class="border-b py-4">Menggunakkan tools sesuai SOP (Standard Operational Procedure)</li>
                
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0  gradient text-white text-2xl font-bold rounded-full my-7 py-5 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-125 duration-300 ease-in-out">
                  Rp 100.000
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
              <div class="w-full p-8 text-3xl font-bold text-center">Cuci AC</div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Berlaku untuk kapasitas 0.5 - 1.5 PK</li>
                <li class="border-b py-4">Gratis konsultasi dengan ahli di bidang AC</li>
                <li class="border-b py-4">Menggunakkan tools sesuai SOP (Standard Operational Procedure)</li>
                <li class="border-b py-4">Harga bisa berubah sesuai dengan jarak</li>
                <li class="border-b py-4">Free 1Pcs pengharum ruangan</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0  gradient text-white text-2xl font-bold rounded-full my-7 py-5 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-125 duration-300 ease-in-out">
                  Rp 70.000
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Bongkar Pasang AC
              </div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Berlaku untuk kapasitas 0.5 - 1.5 PK</li>
                <li class="border-b py-4">Gratis konsultasi dengan ahli di bidang AC</li>
                <li class="border-b py-4">Menggunakkan tools sesuai SOP (Standard Operational Procedure)</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 gradient text-white text-2xl font-bold rounded-full my-7 py-5 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-125 duration-300 ease-in-out">
                  Rp 150.000
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <section class="bg-white border-b py-8" id="Gallery">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12" >
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Gallery
        </h2>
        <div class="w-full mb-4"><div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div></div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="text-gray-800 text-base px-6 mb-5">
                <img height="400" width="280" src="assets/ac/1.jpg">
              </p>
            </a>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="text-gray-800 text-base px-6 mb-5">
                <img height="400" width="280" src="assets/ac/2.png">
              </p>
            </a>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="text-gray-800 text-base px-6 mb-5">
                <img height="400" width="280" src="assets/ac/3.png">           
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white border-b py-8" id="Kontak">
       
        <div class="flex items-center  ">
            <img height="500" width="1280" src="assets/ac/service.png">
        </div>
        <div class="flex items-center justify-start">
          <button class="mx-auto lg:mx-20 hover:underline gradient text-white text-2xl font-bold rounded-full my-6 py-3 px-10 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-125 duration-250 ease-in-out">
            <a href="https://drive.google.com/drive/folders/1GqaCzvSu8I_GTSV6pKC0zunQ0aTlqmbz?usp=share_link">Download</a>        
          </button>
        </div>
    </section> 
    @include('layouts.landing-page.footer')
    Proyek 3 Kelompok 9 D3TI2C
    @include('layouts.landing-page.js')
  </body>
</html>
