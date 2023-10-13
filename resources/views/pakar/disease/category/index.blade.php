@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar Kategori Penyakit')}}</h4>
                    <div class="card-header-action">
                        {{-- <a href="{{ route('pakar.kategori_penyakit.create') }}" class="btn btn-primary">
                            {{__('Tambah ')}} 
                            {{ ucwords(str_replace('_', ' ', $title)) }}
                        </a> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="disease-category-table" class="table table-striped">
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

@include('import.datatable')
@push('scripts')
<script>
    $(document).ready(function() {
        var datatableUrl = "{{ route('pakar.ajax.category.all', ':id') }}"
        var diseaseId = {{ $disease->id }};
        datatableUrl = datatableUrl.replace(':id', diseaseId);

        $('#disease-category-table').DataTable({
            "language": {
                "emptyTable": "Data Kategori Penyakit Kosong"
            },
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": datatableUrl,
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'code', name: 'code'},
                {data: 'action', name: 'action'},
            ]
        });
    });

    function deleteDiseaseCategory (id) {
        var url = "{{ route('pakar.kategori_penyakit.destroy', ':id') }}"
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
                        Swal.fire({
                            title: "Data Dihapus!",
                            text: response.message,
                            icon: 'success',
                        });
                        reloadTable('#disease-category-table');
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