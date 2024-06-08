@extends('User.Layouts.Master')
@section('title', 'Profile user')
@section('content')

    <section class="w-full min-h-screen pt-10 lg:pt-20">
        <div class="hero-section ">
            <div class="min-h-screen p-6 container mx-auto py-11 px-4">
                <div class="max-w-4xl mx-auto p-5 rounded-lg ">
                    <div class="flex justify-between items-center mb-10">
                        <h1 class="text-3xl font-bold ">Personal Page</h1>
                        <div class="border-b border-gray-300 my-4"></div>

                        <nav class="text-sm text-gray-500">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                    <a href="{{ route('home') }}"
                                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}"
                                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-dark-600 dark:text-gray-400 dark:hover:text-white">
                                        <div class="flex items-center">
                                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            User
                                        </div>
                                    </a>
                                </li>

                            </ol>
                        </nav>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div class="bg-white p-6 rounded-lg shadow-md m-1">
                            <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
                            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-5">
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                        Name</label>
                                    <input type="text" name="first_name" id="first_name"
                                        value="{{ old('first_name', $user->first_name) }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="your first name" />
                                </div>
                                <div class="mb-5">
                                    <label for="last_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                        Name</label>
                                    <input type="text" name="last_name" id="last_name"
                                        value="{{ old('last_name', $user->last_name) }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="your last name" />
                                </div>
                                <div class="mb-5">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', $user->email) }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="your email" />
                                </div>
                                <div class="mb-5">
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="your password" disabled />
                                </div>
                                <div class="flex justify-end">
                                    <button type="reset"
                                        class="bg-zinc-300 text-zinc-700 px-4 py-2 rounded-md mr-2">Cancel</button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Save</button>
                                </div>
                            </form>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md h-[22rem]">
                            <h2 class="text-xl font-semibold mb-4">Your Photo</h2>
                            <div class="flex items-center mb-4">
                                <img class="h-12 w-12 rounded-full object-cover mr-4" src="https://placehold.co/100x100"
                                    alt="Profile photo">
                                <div>
                                    <p class="text-sm font-medium text-zinc-700">Edit your photo</p>
                                    <div class="flex space-x-2 text-sm text-zinc-500">
                                        <button class="hover:underline">Delete</button>
                                        <button class="hover:underline">Update</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-2 border-dashed border-zinc-300 p-4 rounded-md text-center">
                                <svg class="mx-auto h-12 w-12 text-zinc-400" fill="none" viewBox="0 0 48 48"
                                    stroke="currentColor">
                                    <path d="M24 4v40m20-20H4" />
                                </svg>
                                <p class="mt-1 text-sm text-zinc-600">
                                    <button class="text-blue-600 hover:underline">Click to upload</button> or drag and drop
                                </p>
                                <p class="mt-1 text-xs text-zinc-500">SVG, PNG, JPG or GIF (max, 800 X 800px)</p>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button type="button"
                                    class="bg-zinc-300 text-zinc-700 px-4 py-2 rounded-md mr-2">Cancel</button>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
