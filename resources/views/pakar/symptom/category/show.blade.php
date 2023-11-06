@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Data Gejala')}}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('pakar.kategoriGejala.index', $category->symptom->id) }}" class="btn btn-danger">
                            {{__('Kembali ')}} 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>{{ __("Nama Gejala") }}</label>
                            <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" value="{{ $category->name }}" placeholder="{{ $category->name }}" readonly>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
</script>

@endpush

@include('import.datatable')