@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('pakar.kategori_penyakit.index') }}" class="btn btn-danger">Kembali </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penyakit.store') }}" method="post">
                    {{-- {{ route('tipe.store') }} --}}
                    @csrf
                    <div class="form-group">
                        {{-- <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label> --}}
                        <label>Nama Wabah / Penyakit / Virus</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary float-right" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
