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
                        <table id="disease-table" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama Penyakit')}}</th>
                                <th>{{__('Kode')}}</th>
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
        $('#disease-table').DataTable({
            "language": {
                "emptyTable": "Data Penyakit Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('pakar.ajax.penyakit.all') }}",
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'code', name: 'code'},
                {data: 'total', name: 'total'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
@endpush
@include('import.datatable')