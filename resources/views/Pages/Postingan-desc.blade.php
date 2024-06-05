@extends('User.Layouts.Master')
@section('title', 'Postingan detail')
@section('content')
    <section class="w-full pt-20">
        <!-- breadcrumb -->
        <div class="container py-4 flex items-center gap-3 ps-6 lg:ps-20 dark:bg-gray-700">
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
                <li>
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            Postingan
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Postingan product
                            detail</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->

        <div class="container pb-8">
            <div class="w-full px-2 lg:px-40">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="justify-center m-3">
                        <img src="{{ $product_detail->main_image_url ?? 'https://via.placeholder.com/350x350' }}"
                            alt="{{ $product_detail->name }}" class="w-full rounded-lg shadow-md">
                        <div class="flex flex-wrap gap-4 justify-start pt-5">
                            {{-- @foreach ($product_detail->additional_images as $image) --}}
                            <div class="w-20 md:w-40 h-auto">
                                <img src="" alt="" class="w-full rounded-lg">
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <div class="m-3">
                        <h1 class="text-2xl font-bold text-gray-800 mb-4 dark:text-white">{{ $product_detail->name }}</h1>
                        <div class="flex items-center mb-4">
                            @php
                                $rating = $product_detail->rating;
                                $fullStars = floor($rating);
                                $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0;
                                $emptyStars = 5 - ($fullStars + $halfStar);
                            @endphp
                            <div class="flex gap-1 text-sm text-yellow-400">
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                                @if ($halfStar)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <clipPath id="half">
                                                <rect x="0" y="0" width="10" height="20" />
                                            </clipPath>
                                        </defs>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            fill="currentColor" clip-path="url(#half)" />
                                        <path fill='none' stroke="currentColor" stroke-width="1"
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endif
                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="none"
                                        stroke="currentColor" stroke-width="1" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="ml-1 text-gray-500 dark:text-gray-400">{{ $product_detail->rating }}</span>
                            <span class="text-gray-500 ms-4 dark:text-white">({{ $product_detail['getReview']->count() }}
                                reviews)</span>
                        </div>
                        <p class="text-black font-bold mb-4 dark:text-white">Harga: <span
                                class="font-normal">{{ number_format($product_detail->price, 0, ',', '.') }}</span></p>
                        <p class="text-black font-bold mb-4 dark:text-white">Category: <span 
                                class="font-normal">{{ $product_detail->category }}</span></p>
                        <p class="text-black font-bold mb-4 dark:text-white">Deskripsi: <span
                                class="font-normal dark:text-white line-clamp-3 hover:line-clamp-none">{{ $product_detail->description }}</span>
                        </p>
                        <p class="text-black font-bold mb-4 dark:text-white">Stok:
                            @if ($product_detail->status == 'tersedia')
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Tersedia</span>
                            @else
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">Tidak
                                    Tersedia</span>
                            @endif
                        </p>

                        <div class="flex items-center space-x-3 p-2 mb-4 ">
                            <div class="relative">
                                <img class="w-20 h-20 rounded-full"
                                    src="{{ $product_detail->merchant->profile_image_url ?? 'https://via.placeholder.com/64' }}"
                                    alt="Profile Picture">
                            </div>
                            <div>
                                <div class="dark:text-white font-semibold text-base">{{ $product_detail->merchant->name }}
                                </div>
                                <div class="text-xs dark:text-white">Aktif {{ $product_detail->merchant->last_active }}
                                </div>
                                <button
                                    class="flex items-center bg-gray-100 text-gray-600 px-1 rounded hover:bg-gray-200 mt-2 border-2">
                                    <a href="{{route('merch-info',$product_detail->merchant->id)}}" class="store-icon mr-1"></a>
                                    Kunjungi Toko
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center mb-4">
                            <button
                                class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition-colors duration-300 mr-2">Favourite</button>
                        </div>
                    </div>
                </div>



                <div class="m-3 mt-8">
                    <h2 class="text-xl font-bold pb-4 p-2 dark:text-white">{{ $product_detail['getReview']->take(3)->count() }}
                        Komentar Terbaru</h2>
                    <hr class="pb-4">
                    @foreach ($product_detail['getReview']->take(3) as $data)
                        <div class="space-y-6">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40x40"
                                        alt="Avatar">
                                </div>
                                <div>

                                    <div class="flex flex-col lg:flex-row items-start lg:items-center mb-4">
                                        <h3 class="font-bold dark:text-white me-3">{{$data->user_info['email']}}</h3>

                                        @php
                                            $rating = $data->rating;
                                            $fullStars = floor($rating);
                                            $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - ($fullStars + $halfStar);
                                        @endphp
                                        <div class="flex gap-1 text-sm text-yellow-400">
                                            @for ($i = 0; $i < $fullStars; $i++)
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewbox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                            @if ($halfStar)
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400"
                                                    fill="currentColor" viewbox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <clipPath id="half">
                                                            <rect x="0" y="0" width="10" height="20" />
                                                        </clipPath>
                                                    </defs>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                        fill="currentColor" clip-path="url(#half)" />
                                                    <path fill='none' stroke="currentColor" stroke-width="1"
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endif
                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="none"
                                                    stroke="currentColor" stroke-width="1" viewbox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                        <p class="text-gray-600 mb-2 dark:text-white">{{ $data->body }}</p>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <svg class="w-4 h-4 mr-1 fill-white" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                                                <path
                                                    d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293 1.293a1 1 0 01-1.414 1.414L9 10.414V17a1 1 0 01-2 0v-6.586l-1.293 1.293a1 1 0 01-1.414-1.414L6.586 9H3V5z">
                                                </path>
                                            </svg>
                                            <span class="dark:text-white">{{ $data->created_at->format('g: i a') }} On
                                                {{ $data->created_at->format('M d Y') }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    @endforeach

                </div>

                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">

                        <button type="button" data-modal-target="star-modal" data-modal-toggle="star-modal"
                            class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="sr-only">Add Star</span>
                        </button>
                        <!-- Main modal -->
                                <div id="star-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Terms of Service
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="star-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                                </p>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                                </p>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button data-modal-hide="star-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                                <button data-modal-hide="star-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <textarea id="chat" rows="1"
                            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <button type="submit"
                            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>

@endsection
