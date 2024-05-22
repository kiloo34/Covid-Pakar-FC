@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar Gejala')}}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('pakar.gejala.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="symptom-table" class="table table-striped">
                            <thead>
                                <th>{{__('No')}}</th>
                                <th>{{__('Nama Gejala')}}</th>
                                <th>{{__('Total Kategori')}}</th>
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
        $('#symptom-table').DataTable({
            "language": {
                "emptyTable": "Data Gejala Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('pakar.ajax.gejala.all') }}",
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'symptomName', name: 'symptomName'},
                {data: 'symptomCategoryCount', name: 'symptomCategoryCount'},
                {data: 'action', name: 'action'},
            ]
        });
    });

    function deleteSymptom (id) {
        var url = "{{ route('pakar.gejala.destroy', ':id') }}"
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
                        reloadTable('#symptom-table');
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