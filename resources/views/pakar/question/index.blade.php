@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar')}} {{ ucfirst($title) }} {{ __('atau Rule') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('pakar.pertanyaan.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="question" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Pertanyaan')}}</th>
                                <th>{{__('Aksi')}}</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#question').DataTable();
    });
</script>
@endpush

@include('import.datatable')