@extends('User.Layouts.Master')
@section('title', 'Postingan Product')
@section('content')
    <div class="w-full pt-20 ">
        <!-- breadcrumb -->
        <div class="container py-4 flex items-center gap-3 ps-10 lg:ps-20 dark:bg-gray-700">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Postingan
                            product</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->

        <!-- shop wrapper -->
        <div class="container grid md:grid-cols-4 grid-cols-2 gap-6 pt-4 pb-16 items-start px-8 lg:px-40">
            <!-- sidebar -->
            <!-- drawer init and toggle -->
            <div class="text-center md:hidden">
                <button
                    class="text-white hover:bg-gray-800 focus:ring-4 focus:ring-dark-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-dark-700 focus:outline-none dark:focus:ring-dark-800 block md:hidden"
                    type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                    aria-controls="drawer-example">
                    <ion-icon class="text-2xl" name="list"></ion-icon>
                </button>
            </div>

            <!-- drawer component -->
            <div id="drawer-example"
                class="fixed top-20 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-label">
                <h5 id="drawer-label"
                    class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                        class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>Info</h5>
                <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="divide-y divide-gray-200 space-y-5">
                    <div>
                        <h3 class="text-xl dark:text-white my-3 uppercase font-medium">Categories</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-1" id="cat-1"
                                    class=" focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="cat-1" class="dark:text-white  ml-3 cusror-pointer">Makanan</label>
                                <div class="ml-auto dark:text-white  text-sm">(15)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-2" id="cat-2"
                                    class=" focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="cat-2" class="dark:text-white  ml-3 cusror-pointer">Minuman</label>
                                <div class="ml-auto dark:text-white  text-sm">(9)</div>
                            </div>

                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">merchant</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-1" id="brand-1"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="brand-1" class="dark:text-white ml-3 cusror-pointer">Cafe</label>
                                <div class="ml-auto dark:text-white text-sm">(15)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-2" id="brand-2"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="brand-2" class="dark:text-white ml-3 cusror-pointer">Lapak Mahasiswa</label>
                                <div class="ml-auto dark:text-white text-sm">(9)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-3" id="brand-3"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="brand-3" class="dark:text-white ml-3 cusror-pointer">Pedagang
                                    Keliling</label>
                                <div class="ml-auto dark:text-white text-sm">(21)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-4" id="brand-4"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="brand-4" class="dark:text-white ml-3 cusror-pointer">UMKM</label>
                                <div class="ml-auto dark:text-white text-sm">(10)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-5" id="brand-5"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="brand-5" class="dark:text-white ml-3 cusror-pointer">Warung Makan</label>
                                <div class="ml-auto dark:text-white text-sm">(10)</div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Harga</h3>
                        <div class="mt-4 flex items-center">
                            <input type="text" name="min" id="min"
                                class="w-full border-gray-300 focus:border-primary rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                                placeholder="min">
                            <span class="mx-3 text-gray-500">-</span>
                            <input type="text" name="max" id="max"
                                class="w-full border-gray-300 focus:border-primary rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                                placeholder="max">
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Rating</h3>
                        <div class="flex items-center gap-2">
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-xs" class="hidden">
                                <label for="size-xs"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">1</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-sm" class="hidden">
                                <label for="size-sm"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">2</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-m" class="hidden">
                                <label for="size-m"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">3</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-l" class="hidden">
                                <label for="size-l"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">4</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-xl" class="hidden">
                                <label for="size-xl"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">5</label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Ketersediaan</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="tersedia" id="brand-1"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="tersedia" class="dark:text-white ml-3 cusror-pointer">Tersedia</label>
                                <div class="ml-auto dark:text-white text-sm">(15)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="habis" id="habis"
                                    class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
                                <label for="habis" class="dark:text-white ml-3 cusror-pointer">habis</label>
                                <div class="ml-auto dark:text-white text-sm">(9)</div>
                            </div>

                        </div>
                    </div>



                </div>

            </div>

            <!-- ./sidebar -->
            <div class="col-span-1 bg-white dark:bg-gray-700 px-4 pb-6 shadow rounded overflow-hiddenb hidden md:block">
                <div class="divide-y divide-gray-200 space-y-5">
                    <form id="filter-form" method="GET" action="{{ url()->current() }}">
                        <div class="divide-y divide-gray-200 space-y-5">
                            <!-- Filter Kategori -->
                            <div>
                                <h3 class="text-xl dark:text-white my-3 uppercase font-medium">Categories</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="category[]" value="makanan" id="cat-1" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('makanan', request('category', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="cat-1" class="dark:text-white ml-3 cursor-pointer">Makanan</label>
                                        <div class="ml-auto dark:text-white text-sm">(15)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="category[]" value="minuman" id="cat-2" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('minuman', request('category', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="cat-2" class="dark:text-white ml-3 cursor-pointer">Minuman</label>
                                        <div class="ml-auto dark:text-white text-sm">(9)</div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Filter Merchant -->
                            <div class="pt-4">
                                <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Merchant</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="merchant[]" value="cafe" id="brand-1" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('cafe', request('merchant', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="brand-1" class="dark:text-white ml-3 cursor-pointer">Cafe</label>
                                        <div class="ml-auto dark:text-white text-sm">(15)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="merchant[]" value="lapak_mahasiswa" id="brand-2" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('lapak_mahasiswa', request('merchant', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="brand-2" class="dark:text-white ml-3 cursor-pointer">Lapak Mahasiswa</label>
                                        <div class="ml-auto dark:text-white text-sm">(9)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="merchant[]" value="pedagang_keliling" id="brand-3" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('pedagang_keliling', request('merchant', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="brand-3" class="dark:text-white ml-3 cursor-pointer">Pedagang Keliling</label>
                                        <div class="ml-auto dark:text-white text-sm">(21)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="merchant[]" value="umkm" id="brand-4" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('umkm', request('merchant', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="brand-4" class="dark:text-white ml-3 cursor-pointer">UMKM</label>
                                        <div class="ml-auto dark:text-white text-sm">(10)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="merchant[]" value="warung_makan" id="brand-5" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('warung_makan', request('merchant', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="brand-5" class="dark:text-white ml-3 cursor-pointer">Warung Makan</label>
                                        <div class="ml-auto dark:text-white text-sm">(10)</div>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Filter Harga -->
                            <div class="pt-4">
                                <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Harga</h3>
                                <div class="mt-4 flex items-center">
                                    <input type="text" name="min" id="min" value="{{ request('min') }}" class="w-full border-gray-300 focus:border-primary rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm" placeholder="min" onchange="document.getElementById('filter-form').submit();">
                                    <span class="mx-3 text-gray-500">-</span>
                                    <input type="text" name="max" id="max" value="{{ request('max') }}" class="w-full border-gray-300 focus:border-primary rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm" placeholder="max" onchange="document.getElementById('filter-form').submit();">
                                </div>
                            </div>
                
                            <!-- Filter Rating -->
                            <div class="pt-4">
                                <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Rating</h3>
                                <div class="flex items-center gap-2">
                                    <div class="size-selector">
                                        <input type="radio" name="rating" value="1" id="size-xs" class="hidden" {{ request('rating') == '1' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="size-xs" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">1</label>
                                    </div>
                                    <div class="size-selector">
                                        <input type="radio" name="rating" value="2" id="size-sm" class="hidden" {{ request('rating') == '2' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="size-sm" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">2</label>
                                    </div>
                                    <div class="size-selector">
                                        <input type="radio" name="rating" value="3" id="size-m" class="hidden" {{ request('rating') == '3' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="size-m" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">3</label>
                                    </div>
                                    <div class="size-selector">
                                        <input type="radio" name="rating" value="4" id="size-l" class="hidden" {{ request('rating') == '4' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="size-l" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">4</label>
                                    </div>
                                    <div class="size-selector">
                                        <input type="radio" name="rating" value="5" id="size-xl" class="hidden" {{ request('rating') == '5' ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="size-xl" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm dark:text-white">5</label>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Filter Ketersediaan -->
                            <div class="pt-4">
                                <h3 class="text-xl dark:text-white mb-3 uppercase font-medium">Ketersediaan</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="availability[]" value="tersedia" id="tersedia" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('tersedia', request('availability', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="tersedia" class="dark:text-white ml-3 cursor-pointer">Tersedia</label>
                                        <div class="ml-auto dark:text-white text-sm">(15)</div>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" name="availability[]" value="habis" id="habis" class="focus:ring-0 rounded-sm cursor-pointer dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" {{ in_array('habis', request('availability', [])) ? 'checked' : '' }} onchange="document.getElementById('filter-form').submit();">
                                        <label for="habis" class="dark:text-white ml-3 cursor-pointer">Habis</label>
                                        <div class="ml-auto dark:text-white text-sm">(9)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- products -->

            {{-- <div class="col-span-3">
                <form class="w-full mb-6 mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search . . ." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <div class="flex justify-between  mb-4">
                    <form class="w-40px ">
                        <select id="sort"
                            class="bg-gray-50 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option class="py-2" selected>default</option>
                            <option class="py-2">Terbaru</option>
                            <option class="py-2">terlama</option>
                        </select>
                    </form>

                    <div class="flex gap-2 ml-auto">
                        <div
                            class="  w-10 h-9 flex items-center justify-center dark:text-white dark:bg-gray-600 bg-white rounded cursor-pointer">
                            <i class="fa-solid fa-grip-vertical"></i>
                        </div>
                        <div
                            class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                            <i class="fa-solid fa-list"></i>
                        </div>
                    </div>
                </div>

                <div class=" grid md:grid-cols-3 grid-cols-2 gap-6">

                    <div class="bg-white dark:bg-gray-600 shadow rounded overflow-hidden group ">
                        <div class="relative">
                            <img src="assets/img/product/food1.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                            justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-5 pb-3 px-4">
                            <a href="#">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tersedia</span>
                                <h4
                                    class="uppercase dark:text-white font-bold  text-2xl mb-2 text-gray-800 hover:text-blue-800 transition">
                                    Seblak</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl dark:text-white font-semibold">Rp. 12.000</p>
                            </div>

                            <div class="flex flex-col gap-2 mt-4 text-black dark:text-white">
                                <a href="">
                                    <ion-icon name="pin"></ion-icon> Lokasi
                                </a>
                                <a href="">
                                    <ion-icon name="cart"></ion-icon> Toko
                                </a>
                            </div>
                            <div class="flex items-center mt-2">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>

                    </div>




                </div>
            </div> --}}
            <div class="col-span-3 mb-12" x-data="layoutData()">
                <form class="w-full mb-6 mx-auto" method="GET" action="{{ url()->current() }}">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search . . ." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                
        
                <div class="flex justify-between mb-4">
                    <form id="sortForm" class="w-40px" method="GET" action="{{ url()->current() }}">
                        <select id="sort" name="sort" class="bg-gray-50 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="document.getElementById('sortForm').submit();">
                            <option class="py-2" value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Default</option>
                            <option class="py-2" value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                            <option class="py-2" value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
                        </select>
                    </form>
                    
        
                    <div class="flex gap-2 ml-auto">
                        <div @click="setLayout('grid')" :class="{ 'bg-blue-700 text-white': layout === 'grid', 'dark:bg-gray-600 bg-white': layout !== 'grid' }" class="w-10 h-9 flex items-center justify-center rounded cursor-pointer">
                            <i class="fa-solid fa-grip-vertical"></i>
                        </div>
                        <div @click="setLayout('list')" :class="{ 'bg-blue-700 text-white': layout === 'list', 'dark:bg-gray-600 bg-white': layout !== 'list' }" class="border border-gray-300 w-10 h-9 flex items-center justify-center  rounded cursor-pointer">
                            <i class="fa-solid fa-list"></i>
                        </div>
                    </div>
                </div>
                
                <div :class="layout === 'grid' ? 'grid md:grid-cols-3 grid-cols-2 gap-6' : 'flex flex-col gap-4'">

                    @if($products->count() > 0)
                    @foreach ($products as $product)
                    <div :class="layout === 'grid' ? 'bg-white dark:bg-gray-600 shadow rounded overflow-hidden group' : 'flex items-center p-4 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'">
                        <div class="relative ">
                            <img src="assets/img/product/food1.jpg" alt="product 1" class="w-full h-48 object-cover">
                            <div :class="layout === 'grid' ? 'absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ' : 'inset-0 flex gap-2 mt-2'">
                                <a href="{{route('post-product-detail',$product->id)}}" class="text-white text-lg w-9 h-8 rounded-full bg-blue-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-blue-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div :class="layout === 'list' ? 'ml-4' : 'pt-5 pb-3 px-4'">
                            <a href="#">
                                @if ( $product-> status == 'tersedia') 
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">{{$product->status}}</span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">{{$product->status}}</span>
                                @endif
                                <h4 class="uppercase dark:text-white font-bold text-2xl mb-2 text-gray-800 hover:text-blue-800 transition">{{$product->name}}</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl dark:text-white font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
        
                            <div class="flex flex-col gap-2 mt-4 text-black dark:text-white">
                                <a class="flex items-center gap-2 font-medium" href="">
                                    <ion-icon name="pin"></ion-icon><p class="text-sm text-blue-800 dark:text-blue-300">{{$product->merchant->address}} </p>
                                </a>
                                <a href="">
                                    <ion-icon name="cart"></ion-icon> {{$product->merchant->name}}
                                </a>
                            </div>
                            <div class="flex items-center mt-2">
                                @php
                                    $rating = $product->rating; 
                                    $fullStars = floor($rating); 
                                    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0; 
                                    $emptyStars = 5 - ($fullStars + $halfStar); 
                                @endphp
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <ion-icon name="star"></ion-icon>
                                    @endfor
                                    @if ($halfStar)
                                    <svg class="size-3" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 122.88 117.56" xml:space="preserve"><style>.st0{fill:#ffcf00}</style><path class="st0" d="M68 4.44l13.66 31.98 34.75 3.12v-.02c1.93.17 3.62 1.11 4.79 2.51a7.043 7.043 0 011.65 5.13v.02a7.17 7.17 0 01-.74 2.58c-.33.66-.76 1.25-1.28 1.77-.19.22-.4.41-.64.58L94.15 74.86l7.78 34.05c.44 1.9.06 3.8-.91 5.34a7.033 7.033 0 01-4.41 3.13c-.08.02-.16.03-.25.05-.86.17-1.73.16-2.57.01v.02c-.94-.17-1.83-.53-2.63-1.05l-.08-.06-29.64-17.72-29.97 17.92a7.021 7.021 0 01-5.35.8 7.031 7.031 0 01-4.34-3.23c-.48-.8-.78-1.65-.91-2.52-.12-.76-.12-1.52 0-2.26.03-.21.07-.42.13-.63l7.74-33.85c-8.79-7.67-17.9-15.32-26.51-23.15l-.01.01-.16-.17a7.046 7.046 0 01-.29-9.62l.18-.2-.01-.01.16-.16c.57-.56 1.21-1.01 1.89-1.35.85-.41 1.77-.65 2.7-.7h.1l34.43-3.09L54.93 4.3c.77-1.8 2.19-3.11 3.87-3.79a7.045 7.045 0 017.64 1.57c.66.66 1.17 1.43 1.52 2.27l.04.09zm7.1 37.42l-13.67-32-13.67 32h-.01a4.067 4.067 0 01-3.4 2.46L9.72 47.43l26.05 22.74c1.2.95 1.82 2.53 1.46 4.13l-7.75 33.93 29.81-17.82c1.26-.78 2.89-.85 4.25-.04l29.87 17.86-7.76-33.93c-.32-1.42.12-2.96 1.29-3.98l26.21-22.89-34.41-3.09a4.073 4.073 0 01-3.64-2.48z"/><defs><path id="SVGID_1_" d="M64.2 5.92l14.67 34.34 37.2 3.34a2.99 2.99 0 012.72 3.23c-.07.8-.45 1.5-1.01 1.99L89.63 73.39l8.32 36.42c.37 1.61-.64 3.21-2.25 3.58-.82.19-1.64.02-2.3-.41L61.44 93.87l-32.07 19.17c-1.41.85-3.25.38-4.09-1.03-.41-.69-.51-1.47-.35-2.2l8.33-36.42L5.11 48.82a2.98 2.98 0 011.81-5.22l37.1-3.33L58.69 5.9c.65-1.52 2.4-2.23 3.92-1.58.75.32 1.3.91 1.59 1.6z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_2_)"><defs><path id="SVGID_3_" d="M3.74 3.68h115.18v110.21H3.74z"/></defs><clipPath id="SVGID_4_"><use xlink:href="#SVGID_3_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_4_)"><image width="244" height="233" xlink:href="data:image/jpeg;base64,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 vGDeMG8YN4wbxg3hf9f2c/6fZUX7h//Z" transform="matrix(.48 0 0 -.48 3.175 114.65)" overflow="visible"/></g></g><path class="st0" d="M68 4.44l13.66 31.98 34.75 3.12v-.02c1.93.17 3.62 1.11 4.79 2.51a7.043 7.043 0 011.65 5.13v.02a7.17 7.17 0 01-.74 2.58c-.33.66-.76 1.25-1.28 1.77-.19.22-.4.41-.64.58L94.15 74.86l7.78 34.05c.44 1.9.06 3.8-.91 5.34a7.033 7.033 0 01-4.41 3.13c-.08.02-.16.03-.25.05-.86.17-1.73.16-2.57.01v.02c-.94-.17-1.83-.53-2.63-1.05l-.08-.06L60.7 98.19a4.082 4.082 0 01-3.76-4.06h-.01V4.11c0-2.21 1.76-4.02 3.95-4.09.48-.04.97-.02 1.47.04.63.08 1.26.25 1.85.5.86.37 1.62.89 2.24 1.52.66.66 1.17 1.43 1.52 2.27l.04.09zm7.1 37.42l-9.99-23.38v72.84l28.28 16.91-7.74-33.93c-.32-1.42.12-2.96 1.29-3.98l26.21-22.89-34.41-3.09a4.073 4.073 0 01-3.64-2.48z"/><path d="M64.2 5.92l14.67 34.34 37.2 3.34a2.99 2.99 0 012.72 3.23c-.07.8-.45 1.5-1.01 1.99L89.63 73.39l8.32 36.42c.37 1.61-.64 3.21-2.25 3.58-.82.19-1.64.02-2.3-.41L61.44 93.87l-.41.25V4.11a2.998 2.998 0 013.17 1.81z" fill="#fff"/><path d="M61.44 60.81c-19.67 0-37.63-2.87-51.3-7.6l-5.03-4.39a2.98 2.98 0 011.81-5.22l37.1-3.33L58.69 5.9c.41-.99 1.33-1.65 2.34-1.79V60.8l.41.01z" fill="#ffd401"/></svg>
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <ion-icon name="star-outline"></ion-icon>
                                    @endfor
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h4 class="text-lg w-full text-center">There are no products.</h4>
                    @endif
                    
        



                </div>
            <nav aria-label="Page navigation example" class="w-full flex justify-center lg:justify-center lg:gap-6 mt-12">

                <nav aria-label="Page navigation example" class="flex flex-between gap-6">
                    {{$products->appends($_GET)->links()}}
                </nav>
               
            </nav>
            <!-- ./products -->
        </div>

       
    </div>
@endsection
