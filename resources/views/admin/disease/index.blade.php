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
    });

    function deleteDisease (id) {
        var url = "{{ route('admin.penyakit.destroy', ':id') }}"
        url = url.replace(':id', id)

        Swal.fire({
            title: 'Are you sure?',
            text: "Yakin Hapus Data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {id: id, '_method':'DELETE'},
                    success: function (response) {
                        // $($object).parents('tr').remove();
                        Swal.fire({
                            title: "Data Dihapus!",
                            text: response.message,
                            icon: 'success',
                        });
                        reloadTable('#disease-category');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR, textStatus, errorThrown);
                        Swal.fire({
                            title: "Data Gagal Dihapus!",
                            icon: 'error',
                        })
                    }
                });
            }
        });
    }
</script>
@endpush

@include('import.datatable')