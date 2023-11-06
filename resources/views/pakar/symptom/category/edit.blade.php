@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __("Edit") }} {{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('pakar.kategoriGejala.index', $category->symptom->id) }}" class="btn btn-danger">
                        {{ __("Kembali") }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pakar.kategori_gejala.update', $category->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Nama Wabah Gejala") }}</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" placeholder="{{ $category->name }}" value="{{ $category->name }}">
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary float-right" value="{{ __('Ubah') }}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
