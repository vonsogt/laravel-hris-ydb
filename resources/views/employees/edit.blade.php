@extends('layouts.master')
@section('title')
    Ubah Lembaga
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Lembaga @endslot
        @slot('li_end') Ubah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('institutions.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar lembaga</a>
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
            <form method="POST" action="{{ route('institutions.update', $institution->id) }}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Nama</label>
                            <input type="text" name="name" class="form-control" id="name-input" value="{{ old('name', $institution->name ?? '') }}" placeholder="Masukkan nama">
                        </div>
                        <div>
                            <label class="form-label" for="description-input">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description-input" rows="3" spellcheck="false">{{ old('description', $institution->description ?? '') }}</textarea>
                        </div>
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
@endsection
