@extends('User.Layouts.Master')
@section('title', 'Postingan detail')
@section('content')
    <section class="w-full pt-20">
           <!-- breadcrumb -->
           <div class="container py-4 flex items-center gap-3 ps-10 lg:ps-20 dark:bg-gray-700">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                </a>
                </li>
                <li >
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        Postingan
                        </div>
                    </a>
                </li>
                <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Postingan product detail</span>
                </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->

        <div class="container  pb-8">
            <div class="w-full px-2 lg:px-40">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="justify-center m-3">
                        <img src="https://via.placeholder.com/350x350" alt="Italian L-Shape Sofa" class="w-full rounded-lg shadow-md">
                        <div class="flex flex-wrap gap-4 justify-start pt-5">
                            <div class="w-20 md:w-40 h-auto">
                                <img src="https://via.placeholder.com/110x110" alt="Posadecija" class="w-full rounded-lg">
                            </div>
                            <div class="w-20 md:w-40 h-auto">
                                <img src="https://via.placeholder.com/115x115" alt="Posadecija" class="w-full rounded-lg">
                            </div>
                            <div class="w-20 md:w-40 h-auto">
                                <img src="https://via.placeholder.com/115x115" alt="Posadecija" class="w-full rounded-lg">
                            </div>
                        </div>
                    </div>
                    <div class="m-3">
                        <h1 class="text-2xl font-bold text-gray-800 mb-4 dark:text-white">NAMA PRODUK</h1>
                        <div class="flex items-center mb-4">
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 me-1 text-gray-300 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <span class="text-gray-500 ms-4 dark:text-white">(5 reviews)</span>
                        </div>
                            <p class="text-black font-bold mb-4 dark:text-white">Harga: <span class="font-normal">10.000</span></p>
                            <p class="text-black font-bold mb-4 dark:text-white">Category: <span class="font-normal">Makanan</span></p>
                            <p class="text-black font-bold mb-4 dark:text-white">Deskripsi: <span class="font-normal dark:text-white line-clamp-3 hover:line-clamp-none">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas saepe nobis nemo, enim, beatae ab odit quae repudiandae deserunt obcaecati iusto eveniet adipisci. Adipisci voluptatibus esse veniam omnis beatae ipsa.
                                Voluptas soluta esse, amet, aspernatur tempore earum ipsam ipsum numquam quam quasi commodi placeat molestiae consequuntur dignissimos corrupti inventore tempora nobis consequatur praesentium eos cum! Sequi earum nam et iusto!
                                Maiores perferendis sapiente eligendi. Aliquam qui nesciunt ea, exercitationem, debitis placeat harum vero assumenda numquam sequi quo velit. Voluptatum repellendus itaque temporibus voluptas est aut, maxime exercitationem magnam magni. Saepe.0
                            </span></p>
                            <p class="text-black font-bold mb-4 dark:text-white">Stok: <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tersedia</span></p>
    
                            <div class="flex items-center space-x-3 p-2 mb-4 ">
                                
                                <div class="relative">
                                    <img class="w-20 h-20 rounded-full" src="https://via.placeholder.com/64" alt="Profile Picture">
                                </div>
                                <div>
                                    <div class="dark:text-white font-semibold text-base">Toko Asik</div>
                                    <div class="text-xs dark:text-white ">Aktif 1 Jam Lalu</div>
                                    <button class="flex items-center bg-gray-100 text-gray-600 px-1 rounded hover:bg-gray-200 mt-2 border-2">
                                        <span class="store-icon mr-1"></span>
                                        Kunjungi Toko
                                    </button>
                                </div>
                                
                            </div>
    
                        <div class="flex items-center mb-4">
                            <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition-colors duration-300 mr-2">Favourite</button>
                        </div>
                    </div>
                </div>
    
                <div class="m-3 mt-8">
                    <h2 class="text-xl font-bold pb-4 p-2 dark:text-white">3 Komentar</h2> <hr class="pb-4">
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40x40" alt="Avatar">
                            </div>
                            <div>
                                <h3 class="font-bold dark:text-white">Pengguna 1</h3>
                                <p class="text-gray-600 mb-2 dark:text-white">Produk ini sangat bagus, saya sangat puas dengan kualitasnya.</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <svg class="w-4 h-4 mr-1 fill-white"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                                        <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293 1.293a1 1 0 01-1.414 1.414L9 10.414V17a1 1 0 01-2 0v-6.586l-1.293 1.293a1 1 0 01-1.414-1.414L6.586 9H3V5z"></path>
                                    </svg>
                                    <span class="dark:text-white">1 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40x40" alt="Avatar">
                            </div>
                            <div>
                                <h3 class="font-bold dark:text-white">Pengguna 1</h3>
                                <p class="text-gray-600 mb-2 dark:text-white">Produk ini sangat bagus, saya sangat puas dengan kualitasnya.</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <svg class="w-4 h-4 mr-1 fill-white"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                                        <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293 1.293a1 1 0 01-1.414 1.414L9 10.414V17a1 1 0 01-2 0v-6.586l-1.293 1.293a1 1 0 01-1.414-1.414L6.586 9H3V5z"></path>
                                    </svg>
                                    <span class="dark:text-white">1 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40x40" alt="Avatar">
                            </div>
                            <div>
                                <h3 class="font-bold dark:text-white">Pengguna 1</h3>
                                <p class="text-gray-600 mb-2 dark:text-white">Produk ini sangat bagus, saya sangat puas dengan kualitasnya.</p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <svg class="w-4 h-4 mr-1 fill-white"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                                        <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293 1.293a1 1 0 01-1.414 1.414L9 10.414V17a1 1 0 01-2 0v-6.586l-1.293 1.293a1 1 0 01-1.414-1.414L6.586 9H3V5z"></path>
                                    </svg>
                                    <span class="dark:text-white">1 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                     
                        <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z"/>
                            </svg>
                            <span class="sr-only">Add emoji</span>
                        </button>
                        <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                            <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>

@endsection