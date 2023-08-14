@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar Penyakit')}}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('pakar.kategori_penyakit.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="disease" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama Penyakit')}}</th>
                                <th>{{__('Total Kategori Penyakit')}}</th>
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
        $('#disease').DataTable();
    });
</script>
@endpush

@include('import.datatable')