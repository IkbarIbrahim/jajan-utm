@extends('Merchant.Layouts.Master')

@section('content')
    <div class="min-h-screen p-4 sm:ml-64">
        <div class="mt-14 rounded-lg p-4">
            <nav class="mb-4 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 rtl:space-x-reverse md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <ion-icon name="home" class="me-2.5 h-4 w-4"></ion-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="mx-1 w-3 text-gray-400 rtl:rotate-180">|</i>
                            <a href="{{ route('admin.users.index') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Daftar
                                Produk</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="mx-1 w-3 text-gray-400 rtl:rotate-180">|</i>
                            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Edit
                                Produk</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-4xl">
                Edit Produk</h2>
            <div class="block rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                <form>
                    <div class="mb-6">
                        <label for="text-input"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="text-input" aria-describedby="helper-text-explanation"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Nama produk" required />
                    </div>
                    <div class="mb-6">
                        <label for="number-input"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="90210" required />
                    </div>
                    <div class="mb-6">
                        <label for="message"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="message" rows="4"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                            file</label>
                        <input
                            class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                            (MAX. 800x400px).</p>
                    </div>
                    <div class="flex gap-2">
                        <button type="submit"
                            class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Ubah</button>
                        <button type="submit"
                            class="rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
