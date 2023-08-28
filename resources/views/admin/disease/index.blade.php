@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar ')}} {{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.penyakit.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="disease-category" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama Penyakit')}}</th>
                                <th>{{__('Kode')}}</th>
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
        $('#disease-category').DataTable({
            "language": {
                "emptyTable": "Data Catin Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('admin.ajax.penyakit.all') }}",
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'code', name: 'code'},
                {data: 'action', name: 'action'},
            ]
        });

        $('.hapus-penyakit').on('click', function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $(this).data("id");            
            url = url.replace(':id', id);
            $object=$(this);

            console.log(id);
        });
    });
</script>
@endpush

@include('import.datatable')