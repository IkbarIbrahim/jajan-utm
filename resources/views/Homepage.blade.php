@extends('User.Layouts.Master')
@section('title', 'Homepage')
@section('content')
    <div class="w-full ">
        <section class="hero overflow-hidden">

            <div class=" pb-[110px] pt-[120px] z-10 lg:pt-[150px] bg-cover"
                style="background-image: url('assets/img/heros/bgr-hero.jpg')">

                <div class="container  mx-auto">

                    <div class="mx-6 lg:mx-20 flex flex-wrap items-center">
                        <div class="w-full px-4 lg:w-5/12">
                            <div class="hero-content ">
                                <h1
                                    class=" bg-blue-500 bg-opacity-30 p-2 mb-5 text-3xl font-bold !leading-[1.208] text-white sm:text-[42px] lg:text-[40px] xl:text-4xl dark:text-white">
                                    Temukan jajanan yang diinginkan di sini <br />
                                    
                                </h1>
                                <p class="mb-8 max-w-[480px] text-white text-base text-body-color dark:text-dark-6 bg-blue-500 bg-opacity-30 p-2">
                                    Anda kesulitan mencari jajanan yang diinginkan di sekitar utm? atau anda mahasiswa baru ? di website kami anda akan menemukan berbagai postingan jajanan yang berada di sekitar utm 
                                    baik itu makanan, minuman, atau jajanan lainnya
                                    disini juga anda bisa menemukan toko-toko yang ikut memposting jajanan mereka
                                </p>

                                @if (Auth::guard('user')->check())
                                <a @disabled(true) href="{{ route('home') }}" class="z-12 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center md:inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >Hi {{ Auth::guard('user')->user()->first_name }} </a>

                                @elseif (Auth::guard('merchant')->check())
                                    <a @disabled(true) href="{{ route('home') }}" class="z-12 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center md:inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >{{ Auth::guard('merchant')->user()->owner }}  </a>

                                @else
                                <a href="{{ route('login') }}"
                                    class="inline-block rounded-md border border-transparent bg-blue-600 px-7 py-3 text-base font-medium text-white transition hover:bg-opacity-90">
                                    Get Started now
                                </a>
                                @endif
                              

                            </div>
                        </div>
                        <div class="hidden px-4 lg:block lg:w-1/12"></div>
                        <div class="w-full px-4 lg:w-6/12">
                            <div class="lg:ml-auto lg:text-right">
                                <div class="relative z-3 inline-block pt-11 lg:pt-0">
                                    <img src="assets/img/heros/hero-image-01.png" alt="hero"
                                        class="max-w-full lg:ml-auto" />
                                    <span class="absolute m-bottom-8 m-right-8 ">
                                        <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                            <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                            <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                            <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                            <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                            <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                            <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                            <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                            <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                            <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                            <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                            <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                            <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                            <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                            <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                            <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                            <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                            <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                            <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                            <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                            <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                            <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                            <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                            <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                            <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="mt-5 lg:mt-[-210px] w-full z-2 absolute ">
                    <svg class="dark:fill-gray-500 fill-gray-200" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1440 320">
                        <path f fill-opacity="1"
                            d="M0,224L48,240C96,256,192,288,288,293.3C384,299,480,277,576,266.7C672,256,768,256,864,245.3C960,235,1056,213,1152,218.7C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                </div> --}}
        </section>
        <section class="pb-12 pt-20 lg:pb-[90px] lg:pt-[120px] dark:bg-dark">
            <div class="container mx-auto">
                <div class=" flex flex-wrap">
                    <div class="w-full">
                        <div class="w-full mb-12  text-center lg:mb-20 bg-gray-300 bg-opacity-50 p-3 py-6">
                            <span class="mb-2 block text-lg font-semibold text-black dark:text-gray-800">
                                Periksa
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold leading-[1.2] text-dark sm:text-4xl md:text-[40px] dark:text-white">
                                Postingan terbaru
                            </h2>
                            <p class="text-base text-black dark:text-gray-800">
                                Dibawah ini beberapa postingan terbaru yang telah di posting oleh merchant , cek sekarang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto lg:w-[70%] w-[90%] flex flex-wrap">
                    @if ($featured)
                        @foreach ($featured as $item)
                            <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
                                <div class="mb-6 rounded-sm bg-white  shadow-2 hover:shadow-lg  dark:bg-gray-600">
                                    <div class="mb-2 flex items-center justify-center  bg-white-300 dark:bg-gray-700">
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">

                                    </div>
                                    <div class="p-4">
                                        <a href="{{route('post-product-detail',$item->id)}}"
                                            class="mb-[14px] text-2xl font-semibold text-dark dark:text-white flex flex-col">
                                                {{ $item->name }} 
                                                
                                                <span class="text-lg font-bold ">Rp
                                                {{ number_format($item->price, 0, ',', '.') }}</span>
                                        </a>
                                        <p
                                            class="text-body-color hover:text-pretty dark:text-white mb-8 text-start truncate hover:text-clip">
                                            {{ $item->description }}
                                        </p>
                                        <div class="flex flex-col gap-2 text-black dark:text-white">
                                            <p class="flex flex-row font-medium " href="">
                                                <p class="text-xs text-blue-800 dark:text-blue-300">
                                                    {{ $item->merchant->address }} </p>
                                            </p>
                                            <p href="" class="flex">
                                                <svg class="size-6 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <g>
                                                        <path fill="none" d="M0 0h24v24H0z"/>
                                                        <path d="M21 11.646V21a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-9.354A3.985 3.985 0 0 1 2 9V3a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v6c0 1.014-.378 1.94-1 2.646zm-2 1.228a4.007 4.007 0 0 1-4-1.228A3.99 3.99 0 0 1 12 13a3.99 3.99 0 0 1-3-1.354 3.99 3.99 0 0 1-4 1.228V20h14v-7.126zM14 9a1 1 0 0 1 2 0 2 2 0 1 0 4 0V4H4v5a2 2 0 1 0 4 0 1 1 0 1 1 2 0 2 2 0 1 0 4 0z"/>
                                                    </g>
                                                </svg>
                                                {{ $item->merchant->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section>


        

        <section class="dark:bg-gray-400 bg-gray-300 overflow-hidden bg-tg-bg pb-20 pt-20 lg:pb-[120px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="mx-4 flex flex-wrap">
                    <div class="w-full px-4 ">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                            <span class="mb-2 block text-lg font-semibold dark:text-gray-800">
                                Cari tahu
                            </span>
                            <h2
                                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                Toko-toko terbaru
                            </h2>
                            <p class="dark:text-gray-800">
                                Anda bisa melihat toko-toko terbaru yang telah bergabung dengan kami
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sm:mx-8 lg:mx-40 flex flex-wrap justify-center">

                    @if($new_merchant)
                    @foreach ($new_merchant as $nMerchant)   
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div
                            class="shadow-1 dark:shadow-box-dark group mb-8 rounded-[5px] bg-white px-5 pb-10 pt-12 dark:bg-gray-600">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                
                                <img src=" {{ asset('storage/' . $nMerchant->logo)  }}" alt="profile" class="h-[120px] w-[120px] rounded-full">
                                <span
                                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                                {{-- <span
                                    class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                            fill="#3056D3"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                            fill="#3056D3"></path>
                                    </svg>
                                </span> --}}
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-base font-semibold text-dark dark:text-white">
                                {{$nMerchant->name}}
                                </h4>
                                <p class="dark:text-dark-6 mb-5 text-sm text-body-color">
                                    {{$nMerchant->owner}}
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <button type="button" data-tooltip-target="tooltip-default-{{ $nMerchant->id }}"  class="text-dark-8 hover:text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="14" height="16" viewBox="0 0 50 50">
                                            <path d="M 5.5 7 C 3.03125 7 1.011719 9.015625 1 11.484375 C 1 11.484375 1 11.488281 1 11.492188 C 1 11.496094 1 11.496094 1 11.5 L 1 38.5 C 1 40.972656 3.027344 43 5.5 43 L 44.5 43 C 46.972656 43 49 40.972656 49 38.5 L 49 11.5 C 49 11.496094 49 11.496094 49 11.492188 C 49 11.488281 49 11.484375 49 11.484375 C 48.988281 9.015625 46.96875 7 44.5 7 Z M 8.101563 9 L 41.902344 9 L 25 20.78125 Z M 4.773438 9.117188 L 25 23.21875 L 45.230469 9.117188 C 46.253906 9.425781 46.992188 10.355469 47 11.488281 C 46.996094 11.699219 46.78125 12.121094 46.46875 12.460938 C 46.152344 12.804688 45.84375 13.019531 45.84375 13.019531 L 45.839844 13.027344 L 25 27.777344 L 4.160156 13.027344 L 4.15625 13.019531 C 4.15625 13.019531 3.847656 12.804688 3.53125 12.460938 C 3.21875 12.121094 3.003906 11.699219 3 11.488281 C 3.007813 10.355469 3.746094 9.425781 4.773438 9.117188 Z M 3 14.652344 C 3 14.652344 3.007813 14.660156 3.007813 14.660156 L 3.015625 14.664063 L 3.015625 14.667969 L 6 16.777344 L 6 41 L 5.5 41 C 4.109375 41 3 39.890625 3 38.5 Z M 47 14.652344 L 47 38.5 C 47 39.890625 45.890625 41 44.5 41 L 44 41 L 44 16.777344 L 46.984375 14.667969 L 46.984375 14.664063 C 46.984375 14.664063 47 14.652344 47 14.652344 Z M 8 18.191406 L 25 30.222656 L 42 18.191406 L 42 41 L 8 41 Z"></path>
                                        </svg>
                                        
                                    </button>
                                    <div id="tooltip-default-{{ $nMerchant->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        {{ $nMerchant->email }}
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button type="button" data-tooltip-target="tooltip-default2-{{ $nMerchant->id }}"  class="text-dark-8 hover:text-primary">
                                        <svg width="14" height="11" viewBox="0 0 14 11" class="fill-current">
                                            <path
                                                d="M12.3388 2.28129L13.1595 1.30302C13.3971 1.03807 13.4619 0.834263 13.4835 0.73236C12.8356 1.09921 12.2309 1.2215 11.8421 1.2215H11.6909L11.6046 1.13997C11.0862 0.71198 10.4383 0.487793 9.74722 0.487793C8.23544 0.487793 7.04761 1.66987 7.04761 3.03537C7.04761 3.11689 7.04761 3.23918 7.06921 3.3207L7.134 3.72831L6.68046 3.70793C3.91606 3.62641 1.64839 1.38454 1.28124 0.997308C0.676531 2.01634 1.02208 2.99461 1.38923 3.60603L2.12352 4.74734L0.95729 4.13592C0.978887 4.99191 1.32444 5.66447 1.99394 6.1536L2.57706 6.56122L1.99394 6.7854C2.36109 7.82481 3.18177 8.25281 3.78648 8.41585L4.58557 8.61966L3.82967 9.10879C2.62025 9.92402 1.10847 9.86288 0.438965 9.80173C1.79957 10.6985 3.41933 10.9023 4.54237 10.9023C5.38465 10.9023 6.01096 10.8208 6.16214 10.7596C12.2093 9.4145 12.49 4.31935 12.49 3.30032V3.15765L12.6196 3.07613C13.3539 2.42395 13.6563 2.07748 13.829 1.87367C13.7642 1.89406 13.6779 1.93482 13.5915 1.9552L12.3388 2.28129Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <div id="tooltip-default2-{{ $nMerchant->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Soon
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button type="button" data-tooltip-target="tooltip-default3-{{ $nMerchant->id }}"  class="text-dark-8 hover:text-primary">
                                        <svg width="15" height="14" viewBox="0 0 15 14" class="fill-current">
                                            <path
                                                d="M7.45148 9.81506C8.81564 9.81506 9.92151 8.70919 9.92151 7.34503C9.92151 5.98087 8.81564 4.875 7.45148 4.875C6.08732 4.875 4.98145 5.98087 4.98145 7.34503C4.98145 8.70919 6.08732 9.81506 7.45148 9.81506Z">
                                            </path>
                                            <path
                                                d="M10.1343 0.744141H4.72579C2.57516 0.744141 0.829102 2.4902 0.829102 4.64083V10.0068C0.829102 12.2 2.57516 13.946 4.72579 13.946H10.0917C12.2849 13.946 14.031 12.2 14.031 10.0494V4.64083C14.031 2.4902 12.2849 0.744141 10.1343 0.744141ZM7.45134 10.5817C5.64141 10.5817 4.21475 9.11244 4.21475 7.34509C4.21475 5.57774 5.6627 4.1085 7.45134 4.1085C9.2187 4.1085 10.6666 5.57774 10.6666 7.34509C10.6666 9.11244 9.23999 10.5817 7.45134 10.5817ZM11.923 4.4066C11.71 4.64083 11.3906 4.76859 11.0286 4.76859C10.7092 4.76859 10.3898 4.64083 10.1343 4.4066C9.90009 4.17238 9.77232 3.87427 9.77232 3.51228C9.77232 3.15029 9.90009 2.87348 10.1343 2.61796C10.3685 2.36244 10.6666 2.23468 11.0286 2.23468C11.348 2.23468 11.6887 2.36244 11.923 2.59667C12.1359 2.87348 12.2849 3.19288 12.2849 3.53357C12.2637 3.87427 12.1359 4.17238 11.923 4.4066Z">
                                            </path>
                                            <path
                                                d="M11.0496 3.00098C10.7728 3.00098 10.5386 3.2352 10.5386 3.51202C10.5386 3.78883 10.7728 4.02306 11.0496 4.02306C11.3264 4.02306 11.5607 3.78883 11.5607 3.51202C11.5607 3.2352 11.3477 3.00098 11.0496 3.00098Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <div id="tooltip-default3-{{ $nMerchant->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Soon
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="relative z-10 overflow-hidden bg-white dark:bg-gray-700 py-20 lg:py-[110px] mb-8">
            <div class="container mx-auto">
                <div class="relative overflow-hidden">
                    <div class="-mx-4 flex flex-wrap items-stretch">
                        <div class="w-full px-4">
                            <div class="mx-auto max-w-[570px] text-center sm:z-10">
                                <h2 class="mb-2.5 text-3xl flex flex-col font-bold leading-snug dark:text-white md:text-[40px]">
                                    <span class="pr-0.5 text-xl lg:text-4xl">Wanna join for global chat?</span>
                                </h2>
                                <p class="mb-6 text-base leading-relaxed dark:text-white p-5 md:pr-10">
                                    anda bisa bergabung dengan chat global kami, dan berdiskusi dengan pengguna lainnya tentang apa yang mungkin anda inginkan
                                </p>
                                    @if (Auth::guard('user')->check())
                                        <a href="{{ route('global') }}"
                                            class="inline-block rounded-md border border-transparent bg-blue-600 px-7 py-3 text-base font-medium text-white transition hover:bg-opacity-90">
                                            Join chat
                                        </a>
                                    @elseif (Auth::guard('merchant')->check())
                                        <a href="{{ route('global') }}"
                                            class="inline-block rounded-md border border-transparent bg-blue-600 px-7 py-3 text-base font-medium text-white transition hover:bg-opacity-90">
                                            Join chat
                                        </a>
                                    @else
                                    <a href="{{ route('login') }}"
                                        class="inline-block rounded-md border border-transparent bg-blue-600 px-7 py-3 text-base font-medium text-white transition hover:bg-opacity-90">
                                        Get Started now
                                    </a>
                                    @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:block hidden">
                <span class="absolute left-0 top-0 sm:z-0">
                    <svg class="fill-blue-400 dark:fill-gray-800" width="495" height="470" viewBox="0 0 495 470"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04"
                            stroke-width="50"></circle>
                        <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20"></circle>
                       
                    </svg>
                </span>
                <span class="absolute bottom-0 right-0 sm:z-0">
                    <svg class="fill-blue-400 dark:fill-gray-800" width="493" height="470" viewBox="0 0 493 470"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04"
                            stroke-width="50"></circle>
                        <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04"
                            stroke-width="20"></circle>
                       
                    </svg>
                </span>
            </div>
        </section>

    </div>
@endsection
