@extends('Merchant.Layouts.Master')
@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('aris/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('aris/dist/css/adminlte.min.css?v=3.2.0') }}">
@endsection
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="mt-14 rounded-lg border-2 border-dashed border-gray-200 p-4 dark:border-gray-700">
            <section class="content-header">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputNama">Nama</label>
                                    <input type="email" class="form-control" id="exampleInputNama"
                                        placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputalamat">Alamat</label>
                                <input type="password" class="form-control" id="exampleInputalamat"
                                    placeholder="Enter Alamat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile2">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDeskripsi">Deskripsi</label>
                                <input type="password" class="form-control" id="exampleInputDeskripsi"
                                    placeholder="Enter Deskripsi">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-default float-right">Reset</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ asset('aris/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('aris/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('aris/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script src="{{ asset('aris/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
@endsection
