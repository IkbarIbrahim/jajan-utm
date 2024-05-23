@extends('User.Layouts.Master')
@section('title', 'Postingan detail')
@section('content')
    <section class="w-full pt-20">
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
                {{-- <li >
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        Postingan
                        </div>
                    </a>
                </li> --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Merchant List</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->

  

        <div class="container mx-auto py-8 px-8 lg:px-40" x-data="layoutData()">
            <form class="w-full mb-6 mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search . . ." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        
            <div class="flex justify-between mb-4">
                <form class="w-40px">
                    <select id="sort" class="bg-gray-50 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="py-2" selected>default</option>
                        <option class="py-2">Terbaru</option>
                        <option class="py-2">terlama</option>
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
        
            <div :class="layout === 'grid' ? 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4' : 'flex flex-col gap-4'">
                <div :class="layout === 'grid' ? 'dark:bg-gray-600 bg-white border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative' : 'flex items-center p-4 h-40 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'">
                    <div class="relative">
                        <img  src="https://via.placeholder.com/300" alt="Product Image" :class="layout === 'grid' ? ' w-full rounded-lg mb-4' :'h-32 lg:h-28 lg:w-28 w-32 rounded-lg '">
                        <div :class=" layout === 'grid' ? 'absolute bottom-0 right-0 mb-2 mr-2 w-10 h-10' : 'absolute bottom-0 right-0 mb-2 mr-2 w-12 h-12 lg:block hidden'">
                            <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-full border-2 border-white shadow-md ">
                        </div>
                    </div>
                    <div :class="layout === 'list' ? 'ml-4' : ''">
                        <h2 class="dark:text-white text-lg font-medium">Toko 2</h2>
                        <a href="#" class="font-sm text-blue-600 dark:text-blue-500 hover:underline">Lokasi</a>
                        <p class="dark:text-white mb-3 text-xs">Description: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti officiis</p>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More
                            <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div :class="layout === 'grid' ? 'dark:bg-gray-600 bg-white border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative' : 'flex items-center p-4 h-40 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'">
                    <div class="relative">
                        <img  src="https://via.placeholder.com/300" alt="Product Image" :class="layout === 'grid' ? ' w-full rounded-lg mb-4' :'h-32 lg:h-28 lg:w-28 w-32 rounded-lg '">
                        <div :class=" layout === 'grid' ? 'absolute bottom-0 right-0 mb-2 mr-2 w-10 h-10' : 'absolute bottom-0 right-0 mb-2 mr-2 w-12 h-12 lg:block hidden'">
                            <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-full border-2 border-white shadow-md ">
                        </div>
                    </div>
                    <div :class="layout === 'list' ? 'ml-4' : ''">
                        <h2 class="dark:text-white text-lg font-medium">Toko 2</h2>
                        <a href="#" class="font-sm text-blue-600 dark:text-blue-500 hover:underline">Lokasi</a>
                        <p class="dark:text-white mb-3 text-xs">Description: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti officiis</p>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More
                            <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div :class="layout === 'grid' ? 'dark:bg-gray-600 bg-white border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative' : 'flex items-center p-4 h-40 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'">
                    <div class="relative">
                        <img  src="https://via.placeholder.com/300" alt="Product Image" :class="layout === 'grid' ? ' w-full rounded-lg mb-4' :'h-32 lg:h-28 lg:w-28 w-32 rounded-lg '">
                        <div :class=" layout === 'grid' ? 'absolute bottom-0 right-0 mb-2 mr-2 w-10 h-10' : 'absolute bottom-0 right-0 mb-2 mr-2 w-12 h-12 lg:block hidden'">
                            <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-full border-2 border-white shadow-md ">
                        </div>
                    </div>
                    <div :class="layout === 'list' ? 'ml-4' : ''">
                        <h2 class="dark:text-white text-lg font-medium">Toko 2</h2>
                        <a href="#" class="font-sm text-blue-600 dark:text-blue-500 hover:underline">Lokasi</a>
                        <p class="dark:text-white mb-3 text-xs">Description: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti officiis</p>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More
                            <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div :class="layout === 'grid' ? 'dark:bg-gray-600 bg-white border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative' : 'flex items-center p-4 h-40 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'">
                    <div class="relative">
                        <img  src="https://via.placeholder.com/300" alt="Product Image" :class="layout === 'grid' ? ' w-full rounded-lg mb-4' :'h-32 lg:h-28 lg:w-28 w-32 rounded-lg '">
                        <div :class=" layout === 'grid' ? 'absolute bottom-0 right-0 mb-2 mr-2 w-10 h-10' : 'absolute bottom-0 right-0 mb-2 mr-2 w-12 h-12 lg:block hidden'">
                            <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-full border-2 border-white shadow-md ">
                        </div>
                    </div>
                    <div :class="layout === 'list' ? 'ml-4' : ''">
                        <h2 class="dark:text-white text-lg font-medium">Toko 2</h2>
                        <a href="#" class="font-sm text-blue-600 dark:text-blue-500 hover:underline">Lokasi</a>
                        <p class="dark:text-white mb-3 text-xs">Description: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti officiis</p>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More
                            <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
        
              
            </div>
        </div>
        
        <!-- Tambahkan script Alpine.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.2/cdn.min.js" integrity="sha512-oHv8w2mpVQjAwKXjzI+cKqdr1jmxPA1ELvOlE/pM2pUzMo9TKZ6nXhzMAmMcZ1T4sy5roJYZX6cNi7O2A00JDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <nav aria-label="Page navigation example" class="w-full flex justify-center lg:justify-end mb-8 lg:pe-40">
            <ul class="inline-flex -space-x-px text-base h-10">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </section>

@endsection
