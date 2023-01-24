@extends('layouts.master')
@section('title')
    Tambah Jabatan
@endsection
@section('css')
    <!-- One of the following themes -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/@simonwep/pickr/themes/classic.min.css') }}" type="text/css" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/@simonwep/pickr/themes/monolith.min.css') }}" type="text/css" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}" type="text/css" /> <!-- 'nano' theme -->
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Jabatan @endslot
        @slot('li_end') Tambah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('positions.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar jabatan</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            @if ($errors->any())
                <div class="alert alert-danger pb-0" role="alert">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li><i class="la la-info-circle"></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('positions.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Nama</label>
                            <input type="text" name="name" class="form-control" id="name-input" value="{{ old('name', $position->name ?? '') }}" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description-input">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description-input" rows="3" spellcheck="false">{{ old('description', $position->description ?? '') }}</textarea>
                        </div>
                        <div>
                            <label class="form-label">Tema Dasbor</label>
                            <input type="hidden" name="theme_color" value="{{ old('theme_color', $position->theme_color ?? '#405189') }}">
                            <div id="theme-color-picker" class="colorpicker-input"></div>
                        </div><!-- end col -->
                    </div>
                </div>
                <!-- end card -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-sm">Simpan</button>
                </div>
            </form>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <!-- Modern colorpicker bundle -->
    <script src="{{ URL::asset('assets/libs/@simonwep/pickr/pickr.min.js') }}"></script>
    <script>
        // color picker input
        const pickr = Pickr.create({
            el: "#theme-color-picker",
            theme: "monolith",
            default: "#405189",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            components: {
                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    input: true,
                    clear: true,
                    save: true,
                },
            },
        });

        pickr.on("save", (color, instance) => {
            $("input[name='theme_color']").val(color.toHEXA().toString());
            instance.hide();
            $(".navbar-menu").css("background-color", color.toHEXA().toString());
            $(".navbar-brand-box").css("background-color", color.toHEXA().toString());
        });
        
    </script>
@endsection
