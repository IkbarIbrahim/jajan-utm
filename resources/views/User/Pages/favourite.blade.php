@extends('User.Layouts.Master')

@section('title', 'Favourite')
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
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">User</span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Favourite</span>
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
        {{-- <div class="col-span-1 bg-white dark:bg-gray-700 text-gray-900 dark:text-white px-4 pb-6 shadow rounded overflow-hiddenb hidden md:block">
            <div class="divide-y divide-gray-200 space-y-5">
                <div class="flex">
                    <div class="mt-6 mr-3">
                        <img class="w-10 h-10 rounded" src="{{ asset('assets/img/product/food1.jpg') }}" alt="Rounded avatar">
                    </div>
                    <div class="mt-4">
                        <p class="text-xl"><b>Ikbar Ibrahim</b></p>
                        <p class="text-opacity-30 text-sl">Software Engineer</p>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- products -->

        <div class="col-span-4 mb-12" x-data="layoutData()">
            
            
            
            <div class='flex flex-col gap-4'>
                @if($products->count() > 0)
                    @foreach ($products as $product)
                    <div class='flex items-center p-4 bg-white border border-gray-200 dark:bg-gray-700 dark:border-gray-700 rounded-lg shadow-md'>
                        <div class="relative ">
                            <img src="{{ asset('assets/img/product/food1.jpg') }}" alt="product 1" class="w-full h-48 object-cover">
                            <div class='inset-0 flex gap-2 mt-2'>
                                <a href="{{route('post-product-detail',$product->id)}}" class="text-white text-lg w-9 h-8 rounded-full bg-blue-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-blue-600 flex items-center justify-center hover:bg-gray-800 transition" title="delete this favorite">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class=" 'pt-5 pb-3 px-4">
                            <a href="#">
                                @if ( $product->status == 'tersedia') 
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">{{$product->status}}</span>
                                @else
                                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">{{$product->status}}</span>
                                @endif
                                <h4 class="uppercase dark:text-white font-bold text-xl mb-2 text-gray-800 hover:text-blue-800 transition">{{$product->name}}</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl dark:text-white font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
            
                            <div class="flex flex-col gap-2 mt-4 text-black dark:text-white">
                                <a class="flex items-center gap-2 font-medium" href="">
                                    <ion-icon name="pin"></ion-icon><p class="text-xs font-light text-blue-800 dark:text-blue-300">{{$product->merchant->address}} </p>
                                </a>
                                <a href="">
                                    <p class="text-sm font-bold" >[ {{$product->merchant->type}} ]</p> {{$product->merchant->name}} 
                                </a>
                            </div>
                            <div class="flex lg:items-center mt-2 flex-col lg:flex-row ">
                                @php
                                    $rating = $product->rating; 
                                    $fullStars = floor($rating); 
                                    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0; 
                                    $emptyStars = 5 - ($fullStars + $halfStar); 
                                @endphp
                                <div class="flex gap-1 text-sm text-yellow-400 ">
                                    @for ($i = 0; $i < $fullStars; $i++)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    @endfor
                                    @if ($halfStar)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <clipPath id="half">
                                                <rect x="0" y="0" width="10" height="20" />
                                            </clipPath>
                                        </defs>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            fill="currentColor"
                                            clip-path="url(#half)"/>
                                        <path fill='none'  stroke="currentColor" stroke-width="1" 
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" stroke-width="1" 
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    @endfor
                                </div>
                                <span class="m-0 lg:ml-1 text-gray-500 dark:text-gray-400">{{$product->rating}}</span>
                                <div class="text-xs text-gray-500 m-0 lg:ml-3">{{$product['getReview']->count()}} Review</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <h4 class="text-lg w-full text-center text-gray-500 dark:text-gray-400">There are no products.</h4>
                @endif
            </div>
            
            <!-- Tambahkan Pagination Links -->
            <nav class="flex-column flex flex-wrap items-center justify-between pt-4 md:flex-row" aria-label="Table navigation">
                <span class="mb-4 block w-full text-sm font-normal text-gray-500 dark:text-gray-400 md:mb-0 md:inline md:w-auto">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">
                        @if ($products->firstItem())
                            {{ $products->firstItem() }}-{{ $products->lastItem() }}
                        @else
                            {{ $products->count() }}
                        @endif
                    </span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $products->total() }}</span>
                </span>
                <ul class="inline-flex h-8 -space-x-px text-sm rtl:space-x-reverse">
                    <li>
                        @if ($products->onFirstPage())
                            <a href=""
                                class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        @else
                            <a href="{{ $products->previousPageUrl() }}"
                                class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        @endif
                    </li>
            
                    @foreach ($products->links() as $element)
                        @if (is_string($element))
                            <li>
                                <a href=""
                                    class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $element }}</a>
                            </li>
                        @endif
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $products->currentPage())
                                    <li>
                                        <a href="" aria-current="page"
                                            class="flex h-8 items-center justify-center border border-gray-300 bg-blue-50 px-3 text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}"
                                            class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
            
                    <li>
                        @if ($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}"
                                class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        @else
                            <a href=""
                                class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        @endif
                    </li>
                </ul>
            </nav>
            
            
            </div>
        <!-- ./products -->
    </div>

   
</div>

@endsection