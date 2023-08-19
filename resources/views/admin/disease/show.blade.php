@extends('layouts.myview')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __("Detail") }} {{ ucwords(str_replace('_', ' ', $title)) }} {{ $disease->name }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.penyakit.index') }}" class="btn btn-danger">{{ __("Kembali") }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label>
                        <input name="name" type="text" class="form-control" value="{{ $disease->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>{{ __("Kode") }}</label>
                        <input name="code" type="text" class="form-control" value="{{ $disease->code }}" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
