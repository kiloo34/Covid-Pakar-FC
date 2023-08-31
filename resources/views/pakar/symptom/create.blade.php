@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('pakar.kategori_penyakit.index') }}" class="btn btn-danger">{{ __('Kembali') }} </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pakar.gejala.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label>
                        <select name="diseaseCategory" class="form-control @error('diseaseCategory') is-invalid @enderror" value="{{ old('diseaseCategory') }}" autofocus>
                            <option value="">{{ __("Pilih Kategori Wabah / Penyakit / Virus") }}</option>
                            @foreach ($diseaseCategories as $diseaseCategory)
                                <option value="{{$diseaseCategory->id}}"> {{ ucfirst($diseases->find($diseaseCategory->disease_id)->name) }} - {{ ucfirst($diseaseCategory->name) }}</option>
                            @endforeach
                        </select>
                        @error('diseaseCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __("Nama Gejala") }}</label>
                        <input name="symptomName" type="text" class="form-control @error('symptomName') is-invalid @enderror"
                            value="{{ old('symptomName') }}" autocomplete="symptomName" autofocus>
                        @error('symptomName')
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
