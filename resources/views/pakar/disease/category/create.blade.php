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
                <form action="{{ route('pakar.kategori_penyakit.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label>
                        <select name="disease" class="form-control @error('disease') is-invalid @enderror" value="{{ old('disease') }}" autofocus>
                            <option value="">{{ __("Pilih Nama Wabah / Penyakit / Virus") }}</option>
                            @foreach ($diseases as $disease)
                                <option value="{{$disease->id}}">{{ucfirst($disease->name)}}</option>
                            @endforeach
                        </select>
                        @error('disease')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                        <label>{{ __("Kategori Penyakit") }}</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" autocomplete="category" autofocus>
                        @error('category')
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
