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
                                <th>{{__("Nama Gejala") }}</th>
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
        var datatableUrl = "{{ route('pakar.ajax.gejala.detail.list', ':id') }}"
        var symptomId = {{ $symptom->id }}
        datatableUrl = datatableUrl.replace(':id', symptomId)

        console.log(datatableUrl);

        $('#symptom-table').DataTable({
            "language": {
                "emptyTable": "Data Gejala Kosong"
            },
            "responsive": true,
            "processing": true,
            "ajax": datatableUrl,
            "serverSide": true,
            "columns": [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'diseaseName', name: 'diseaseName'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>

@endpush

@include('import.datatable')