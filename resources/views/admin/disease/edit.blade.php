@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __("Edit") }} {{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.penyakit.index') }}" class="btn btn-danger">{{ __("Kembali") }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penyakit.update', $disease->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $disease->name }}" autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __("Kode") }}</label>
                        <input name="code" type="text" class="form-control @error('code') is-invalid @enderror" value="{{ $disease->code }}" autocomplete="code" autofocus>
                        @error('code')
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
