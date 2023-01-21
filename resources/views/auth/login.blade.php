@extends('layouts.master-without-nav')
@section('title')
    Masuk
@endsection
@section('content')
<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index" class="d-inline-block auth-logo">
                                <img src="{{ URL::asset('assets/images/logo-light.png')}}" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Human Resource Information System</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Selamat Datang !</h5>
                                <p class="text-muted">Masuk sebagai</p>
                            </div>
                            <ul class="nav nav-pills justify-content-center" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link @if(!$errors->any()) active @endif" data-bs-toggle="tab" href="#pegawai-1" role="tab">
                                        Pegawai
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link @if($errors->any()) active @endif" data-bs-toggle="tab" href="#admin-1" role="tab">
                                        Admin
                                    </a>
                                </li>
                            </ul>
                            <div class="p-2 mt-4">
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">
                                    <div class="tab-pane @if(!$errors->any()) active @endif" id="pegawai-1" role="tabpanel">
                                        @if (auth()->guard('api')->check())
                                            <div class="card-body text-center">
                                                <div class="avatar-lg mx-auto mt-2">
                                                    <div class="avatar-title bg-light text-success display-3 rounded-circle">
                                                        <i class="ri-checkbox-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <h4>Anda sudah masuk !</h4>
                                                    <p class="text-muted mx-4">Anda sudah masuk sebagai <span class="fw-bold text-primary">pegawai</span>.</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('employee.home') }}" class="btn btn-success w-100">Kembali ke Dasbor Pegawai</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        @else
                                            <form id="handleAjax" action="{{ route('api.v1.auth.login') }}" method="POST">
                                                @csrf
                                                {{-- <div class="mb-3">
                                                    <label for="employee-institution-number-input" class="form-label">Nomor Induk Yayasan</label>
                                                    <input type="text" class="form-control" value="{{ old('institution_number', '') }}" id="employee-institution-number-input" name="institution_number" placeholder="Masukkan nomor induk yayasan">
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label for="employee-email-input" class="form-label">Email</label>
                                                    <input type="email" class="form-control" value="{{ old('email', '') }}" id="employee-email-input" name="email" placeholder="cth: pegawai@email.com">
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset-basic" class="text-muted">Lupa Kata Sandi?</a>
                                                    </div>
                                                    <label class="form-label" for="employee-password-input">Kata Sandi</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5" name="password" placeholder="Masukkan kata sandi" id="employee-password-input">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="employee-password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Masuk</button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="tab-pane @if($errors->any()) active @endif" id="admin-1" role="tabpanel">
                                        @if (auth()->guard()->check())
                                            <div class="card-body text-center">
                                                <div class="avatar-lg mx-auto mt-2">
                                                    <div class="avatar-title bg-light text-success display-3 rounded-circle">
                                                        <i class="ri-checkbox-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <h4>Anda sudah masuk !</h4>
                                                    <p class="text-muted mx-4">Anda sudah masuk sebagai <span class="fw-bold text-primary">admin</span>.</p>
                                                    <div class="mt-4">
                                                        <a href="{{ route('root') }}" class="btn btn-success w-100">Kembali ke Dasbor Admin</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        @else
                                            <form action="{{ route('login') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Email</label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', '') }}" id="username" name="email" placeholder="Masukkan email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset-basic" class="text-muted">Lupa Kata Sandi?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Kata Sandi</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 @error('password') is-invalid @enderror" name="password" placeholder="Masukkan kata sandi" id="password-input">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Masuk</button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    {{-- <div class="mt-4 text-center">
                        <p class="mb-0">Belum punya akun ? <a href="register" class="fw-semibold text-primary text-decoration-underline"> Daftar </a> </p>
                    </div> --}}

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> Yayasan Darussalam Batam. Dibuat dengan <i class="mdi mdi-heart text-danger"></i> oleh Anggi Syah Putri Nasution</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
@endsection
@section('script')
<script src="assets/libs/particles.js/particles.js.min.js"></script>
<script src="assets/js/pages/particles.app.js"></script>

<script>

    // password addon
    if (document.getElementById('password-addon')) {
        document.getElementById('password-addon').addEventListener('click', function () {
            var passwordInput = document.getElementById("password-input");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    }

    // employee password addon
    if (document.getElementById('employee-password-addon')) {
        document.getElementById('employee-password-addon').addEventListener('click', function () {
                var passwordInput = document.getElementById("employee-password-input");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    }

    $(function() {
        // handle submit event of form
        $(document).on("submit", "#handleAjax", function() {
            var e = this;
            // change login button text before ajax
            $(this).find("[type='submit']").html("Masuk...");

            $.post($(this).attr('action'), $(this).serialize(), function(data) {

                $(e).find("[type='submit']").html("Masuk");
                if (data.access_token) { // If success then redirect to login url
                    window.location = data.redirect_location;
                }
            }).fail(function(response) {
                // handle error and show in html
                $(e).find("[type='submit']").html("Masuk");
                $(".invalid-feedback").remove();
                $(".is-invalid").removeClass('is-invalid');
                var erroJson = JSON.parse(response.responseText);

                for (var err in erroJson) {
                    if (err == 'error') {
                        var el = document.createElement("span")
                            el.role = 'alert'
                            el.className = 'invalid-feedback'
                            el.innerHTML = '<strong>Identitas tersebut tidak cocok dengan data kami.</strong>'

                            var input = document.getElementById("handleAjax").querySelector('input[name=institution_number]')

                            input.parentNode.insertBefore(el, input.nextSibling)
                            input.classList.add('is-invalid')
                    } else {
                        for (var errstr of erroJson[err]) {

                            var el = document.createElement("span")
                            el.role = 'alert'
                            el.className = 'invalid-feedback'
                            el.innerHTML = '<strong>' + errstr + '</strong>'

                            var input = document.getElementById("handleAjax").querySelector('input[name=' + err + ']')

                            input.parentNode.insertBefore(el, input.nextSibling)
                            input.classList.add('is-invalid')
                        }
                    }
                }

            });
            return false;
        });
    });
</script>

@endsection
