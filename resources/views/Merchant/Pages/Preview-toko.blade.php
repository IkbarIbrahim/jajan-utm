@extends('Merchant.Layouts.Master')
@section('title', 'Dashboard Merchant')
@section('content')

    <section class="w-full ">
        <div class="min-h-screen p-4 sm:ml-64">
            <div class="mt-14 rounded-lg p-4">
                <div class="max-w-4xl mx-auto p-5 rounded-lg  bg-white dark:bg-gray-700 items-center md:items-start space-y-1 md:space-x-4">
                    <img src="{{ asset('storage/'.  $merchant_detail->cover ) }}" alt="Cover Toko" class="w-full rounded-lg mb-4">
                    <div class="p-4 flex space-x-5 ml-6">
                        <img src="{{ asset('storage/'.  $merchant_detail->logo ) }}" alt="Business Logo" class=" object-cover items-end rounded-lg size-20">
                        <div class="flex-grow-0bg-white dark:text-white dark:bg-gray-700 sm:bg-blur-600 ">
                            <div class="space-x-2">
                                <h2 class="text-xl font-bold ">{{ $merchant_detail->name }}</h2>
                                <p>{{ $merchant_detail->address }}</p>
                            </div>

                        </div>

                        <div class="flex md:items-center md:space-x-5 mt-4 md:mt-0 ">
                            <div class="flex items-center space-x-1 gap-1 ml-10 ">
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span class="text-yellow-500 font-bold dark:text-white">Soon.</span>
                                {{-- <span class="text-zinc-600 dark:text-white">Rating & Ulasan</span> --}}
                            </div>
                            <div class="border-l border-zinc-300 h-6 mx-2 md:mx-4"></div>
                            <div class="text-zinc-600  dark:text-white">{{ $merchant_detail->email }}</div>
                        </div>
                    </div>
                </div>

               
                <div
                class="max-w-4xl mx-auto p-5 mt-10 rounded-lg dark:bg-gray-700 bg-white items-center md:items-start space-y-1 md:space-x-4">
                <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-8 lg:grid-cols-4 gap-6">
                    @foreach ($products_paginate as $product)
                        <div
                            class="bg-white border dark:bg-gray-600 dark:border-gray-700 dark:text-white border-gray-200 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative">
                            <div class="relative">
                                <img src="{{ asset('storage/'.  $product->photo ) }}" alt="Product Image"
                                    class="w-full rounded-lg mb-4">
                            </div>
                            <h2 class=" text-lg font-medium">{{ $product->name }}</h2>
                            <p class="text-gray-500 dark:text-white mb-3 text-xs">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                            <a href=" {{ route('post-product-detail', $product->id) }}"
                                class="bg-blue-700 text-white px-3 py-1 rounded hover:bg-blue-500 transition-colors duration-300 text-sm">View</a>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    {{ $products_paginate->links('Pages.Pagination') }}
                </div>

            </div>

            <div
                class="max-w-4xl mx-auto p-5 mt-10 rounded-lg dark:bg-gray-700 dark:text-white  bg-white items-center md:items-start space-y-1 md:space-x-4">
                <h3 class="font-bold">Deskripsi {{ $merchant_detail->name }}</h3>
                <p>{{ $merchant_detail->description }}</p>
            </div>

            </div>
        </div>
    </section>



@endsection
