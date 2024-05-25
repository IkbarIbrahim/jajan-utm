@extends('User.Layouts.Master')
@section('title', 'Global Chat')

@section('content')

    <div class="flex flex-col antialiased text-gray-800 pt-20 pb-20 ">
         <!-- breadcrumb -->
         <div class="container py-4 flex items-center mb-8 gap-3 ps-10 lg:ps-20 dark:bg-gray-700">
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Global chat</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- ./breadcrumb -->
        <div class="flex flex-row h-full w-full lg:px-40">
            
            <div class="flex flex-col flex-auto h-full px-6">
                <div
                    class="text-xs py-4 px-4 text-gray-700 uppercase rounded-t-xl bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <h1>This is header</h1>
                </div>
                <div class="flex flex-col flex-auto flex-shrink-0 rounded-b-xl dark:bg-gray-600 bg-gray-300 max-h-screen p-4">
                    <div class="flex flex-col h-full overflow-x-auto mb-4">
                        <div class="flex flex-col h-full">
                            <div class="grid grid-cols-12 gap-y-2">
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex items-start gap-2.5">
                                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="Jese image">
                                        <div class="flex flex-col gap-1 w-full min-w-[300px] lg:max-w-[520px]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie
                                                    Green</span>
                                                <span
                                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                            </div>
                                            <div
                                                class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                <p class="text-sm font-normal text-gray-900 dark:text-white line-clamp-2 hover:line-clamp-none"> That's awesome. I think our users will really appreciate the improvements.</p>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex items-start gap-2.5">
                                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="Jese image">
                                        <div class="flex flex-col gap-1 w-full min-w-[300px] lg:max-w-[520px]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie
                                                    Green</span>
                                                <span
                                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                            </div>
                                            <div
                                                class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                <p class="text-sm font-normal text-gray-900 dark:text-white line-clamp-2 hover:line-clamp-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis laborum ipsa pariatur culpa quasi dicta delectus repellendus consectetur neque quidem optio earum officiis hic ea explicabo, perspiciatis modi laudantium aspernatur! That's awesome. I think our users will really appreciate the improvements.</p>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>

                                </div>



                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-start gap-2.5 " dir="rtl">
                                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="Jese image">
                                        <div class="flex flex-col gap-1 w-full max-w-[320px]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie
                                                    Green</span>
                                                <span
                                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                                            </div>
                                            <div
                                                class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                <p class="text-sm font-normal text-gray-900 dark:text-white"> That's
                                                    awesome. I think our users will really appreciate the improvements.</p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-center justify-start flex-row-reverse">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div>Lorem ipsum dolor sit amet !</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-center justify-start flex-row-reverse">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                                            </div>
                                            <div class="absolute text-xs bottom-0 right-0 -mb-5 mr-2 text-gray-500">
                                                Seen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Perspiciatis, in.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div class="flex flex-row items-center">
                                                <button
                                                    class="flex items-center justify-center bg-indigo-600 hover:bg-indigo-800 rounded-full h-8 w-10">
                                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="flex flex-row items-center space-x-px ml-4">
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-12 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-6 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-5 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-3 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                                                    <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
                        <div>
                            <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex-grow ml-4">
                            <div class="relative w-full">
                                <input type="text"
                                    class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
                                <button
                                    class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="ml-4">
                            <button
                                class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                                <span>Send</span>
                                <span class="ml-2">
                                    <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="bg-white p-6 rounded-lg shadow-md h-[22rem]">
                <h2 class="text-xl font-semibold mb-4">Your Chat</h2>
                

                    
                </div>
            </div> --}}
        </div>
    </div>
@endsection
