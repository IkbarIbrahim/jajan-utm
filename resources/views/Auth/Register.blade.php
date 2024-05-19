
@extends('Auth.Master')
@section('title-auth', 'Register')
@section('navbar-title', 'Getting Started ')

@section('content-auth')
    <main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
        <div class="container">
            <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-bolder text-info text-gradient">Get your things Ready</h3>
                    <p class="mb-0">Complete this form to continue</p>
                </div>

                <div class="card-body">
                    @if (isset($member_level) && $member_level == 'user')
                        @include('Auth.register-form.form-user')
                    @elseif (isset($member_level) && $member_level == 'merchant')
                        @include('Auth.register-form.form-merchant')
                    @else
                        <p class="font-weight-bolder text-info text-gradient">Choose one</p>
                        <form id="user-type-form" action="{{ route('form.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="radio" class="btn-check" name="member_level" value="user" id="user" autocomplete="off" {{ old('member_level', $member_level ?? '') == 'user' ? 'checked' : '' }} onchange="submitForm()">
                                <label class="btn btn-primary" for="user">User</label>
                                <input type="radio" class="btn-check" name="member_level" value="merchant" id="merchant" autocomplete="off" {{ old('member_level', $member_level ?? '') == 'merchant' ? 'checked' : '' }} onchange="submitForm()">
                                <label class="btn btn-primary" for="merchant">Merchant</label>
                            </div>
                        </form>
                    @endif
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n3">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/sate.jpg')"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>


   
@endsection


@push('scripts')
<script>
    function submitForm() {
        document.getElementById('user-type-form').submit();
    }
</script>
@endpush