@extends('Merchant.Layouts.Master')
@section('title', 'Dashboard Merchant')
@section('content')

    <section class="w-full ">
        <div class="max-w-4xl mx-auto p-5 rounded-lg  bg-white">
            <h2 class="text-2xl font-semibold mb-4 pl-2">Informasi Produk</h2>

            <div class="mb-4">
                <label class="block font-medium mb-1 pl-20">Foto Produk
                    <label class="inline-flex items-center pl-3">
                        <input type="radio" name="foto_produk" class="form-radio text-red-600" checked>
                        <span class="ml-2">Foto 1:1</span>
                    </label>
                    <label class="inline-flex items-center pl-3">
                        <input type="radio" name="foto_produk" class="form-radio text-red-600">
                        <span class="ml-2">Foto 3:4</span>
                    </label>
                </label>
                <div class="h-20 w-20 ml-[12rem]  border-dashed border-2 border-zinc-300 dark:border-zinc-600 rounded-lg text-center">
                    <button class="text-red-600 text-xs mt-5">Tambahkan Foto (0/9)</button>
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1 ml-3">Foto Produk Promosi</label>
                <div class="h-20 w-20 ml-[12rem] border-dashed border-2 border-zinc-300 dark:border-zinc-600 rounded-lg text-center">
                    <button class="text-red-600 text-xs mt-5">Tambahkan Foto (0/9)</button>
                </div>
                <ul class="text-xs text-zinc-600 dark:text-zinc-400 ml-12 md:ml-48 list-inside list-disc">
                    <li>
                        Upload Foto 1:1
                    </li>
                    <li>
                        Foto Produk Promosi akan digunakan di halaman promosi, hasil pencarian, rekomendasi, dll. Meng-upload foto produk promosi, akan meningkatkan minat belanja Pembeli.
                    </li>
                </ul>
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1 ml-16">Video Produk</label>
                <div class="h-20 w-20 ml-[12rem] border-dashed border-2 border-zinc-300 dark:border-zinc-600 rounded-lg text-center">
                    <button class="text-red-600 text-xs mt-7">Tambah Video</button>
                </div>
                <ul class="text-xs text-zinc-600 dark:text-zinc-400 ml-12 md:ml-48 list-inside list-disc">
                    <li>
                        Ukuran: Maks. 30MB dan resolusi maks. 1.280x1.280px
                    </li>
                    <li>
                        Durasi: 10-60detik
                    </li>
                    <li>
                        Format: MP4
                    </li>
                    <li>
                        Catatan: Kamu dapat menampilkan produk saat video sedang diproses. Video akan muncul setelah berhasil diproses.
                    </li>
                </ul>
            </div>
            
            <div class="mb-4">
                <label class="block font-medium mb-1 ml-16">Nama Produk 
                    <input type="text" class="w-[40rem] border-zinc-300 border rounded-lg p-2 ml-5" placeholder="Nama Merek + Tipe Produk + Fitur Produk">
                </label>
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1 ml-24 pl-1 ">Kategori
                    <select class="w-[40rem] border-zinc-300 border rounded-lg p-2 ml-5">
                        <option>Pilih kategori</option>
                    </select>
                </label>
            </div>

            <div class="flex items-start space-x-4">
                <label for="product-description" class="text-sm font-medium text-gray-700 ml-14">
                    Deskripsi Produk
                </label>
                <textarea id="product-description" rows="5" class="border border-gray-300 rounded-lg pb-6 ml-7 pl- w-[40rem] focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="flex justify-end space-x-2 mt-10">
                <button class="bg-zinc-200 dark:bg-zinc-700 text-zinc-700 dark:text-zinc-200 px-4 py-2 rounded-lg">Kembali</button>
                <button class="bg-zinc-200 dark:bg-zinc-700 text-zinc-700 dark:text-zinc-200 px-4 py-2 rounded-lg">Simpan & Arsipkan</button>
                <button class="bg-red-600 text-white px-4 py-2 rounded-lg">Simpan & Tampilkan</button>
            </div>
        </div>
    </section>
@endsection
    