@extends('User.Layouts.Master')
@section('title', 'Postingan detail')
@section('content')
    <section class="w-full pt-20">
        <!-- breadcrumb -->
        <div class="container py-4 flex items-center gap-3 ps-10 lg:ps-20 dark:bg-gray-700">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('merch-list') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            Merchant List
                        </div>
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Merchant info</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->
        <div class="container pb-8">
            <div class="w-full px-2 lg:px-40">
                <div class="mt-14 rounded-lg p-4">
                    <div
                        class="max-w-xl lg:max-w-4xl mx-auto p-5 rounded-lg  bg-white items-center md:items-start space-y-1 md:space-x-4">
                        <img src="{{ asset('storage/' . $merchant_detail->cover) }}" alt="Cover Toko" class="w-full rounded-lg mb-4">
                        <div class="p-4 flex flex-col lg:flex-row space-y-2 lg:space-x-5 lg:ml-6">
                            <img src="{{ asset('storage/' . $merchant_detail->logo) }}" alt="Business Logo"
                                class=" object-cover items-end rounded-lg size-20">
                            <div class="flex-grow-0 lg:bg-white sm:bg-blur-600">
                                <div class="space-x-2">
                                    <h2 class="text-xl font-bold">{{ $merchant_detail->name }}</h2>
                                    <p class="text-sm">{{ $merchant_detail->address }}</p>
                                </div>

                            </div>

                            <div class="flex  items-center md:space-x-5 mt-4 md:mt-0 ">
                                <div class="flex items-center space-x-1 gap-1 lg:ml-10">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <span class="text-zinc-600">Soon</span>
                                </div>
                                <div class="border-l border-zinc-300 h-6 mx-2 md:mx-4"></div>
                                <div class="text-zinc-600 ">{{ $merchant_detail->email }}</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="max-w-4xl mx-auto p-5 mt-10 rounded-lg  bg-white items-center md:items-start space-y-1 md:space-x-4">
                        <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-8 lg:grid-cols-4 gap-6">
                            @foreach ($products_paginate as $product)
                                <div
                                    class="bg-white border border-gray-200 rounded-lg shadow-md p-4 hover:translate-y-[-5px] transition-transform duration-300 relative">
                                    <div class="relative">
                                        <img src="{{ asset('storage/' . $product->photo) }}" alt="Product Image"
                                            class="w-full rounded-lg mb-4">
                                    </div>
                                    <h2 class="text-purple-800 text-lg font-medium">{{ $product->name }}</h2>
                                    <p class="text-gray-500 mb-3 text-xs">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</p>
                                    <a href="{{ route('post-product-detail', $product->id) }}"
                                        class="bg-blue-700 text-white px-3 py-1 rounded hover:bg-blue-500 transition-colors duration-300 text-sm">View</a>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            {{ $products_paginate->onEachSide(1)->links('Pages.Pagination') }}
                        </div>

                    </div>

                    <div
                        class="max-w-4xl mx-auto p-5 mt-10 rounded-lg  bg-white items-center md:items-start space-y-1 md:space-x-4">
                        <h3 class="font-bold">Deskripsi {{ $merchant_detail->name }}</h3>
                        <p>{{ $merchant_detail->description }}</p>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection
