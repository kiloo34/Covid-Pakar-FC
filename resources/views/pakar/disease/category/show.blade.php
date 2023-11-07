@extends('layouts.myview')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>{{__('Data Gejala')}}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('pakar.gejala.index') }}" class="btn btn-danger">
                            {{__('Kembali ')}} 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>{{ __("Nama Gejala") }}</label>
                            <input type="text" name="gejala" class="form-control @error('gejala') is-invalid @enderror" value="{{ old('gejala') }}" value="{{ $diseaseCat->name }}" placeholder="{{ $diseaseCat->name }}" readonly>
                            @error('gejala')
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
{{-- //     var symptomId = {{ $symptom->id }} --}}
<script>
    // $(document).ready(function() {
    //     var datatableUrl = "{{ route('pakar.ajax.gejala.detail.list', ':id') }}"
    //     datatableUrl = datatableUrl.replace(':id', symptomId)

    //     console.log(datatableUrl);

    //     $('#symptom-table').DataTable({
    //         "language": {
    //             "emptyTable": "Data Gejala Kosong"
    //         },
    //         "responsive": true,
    //         "processing": true,
    //         "ajax": datatableUrl,
    //         "serverSide": true,
    //         "columns": [
    //             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    //             {data: 'diseaseName', name: 'diseaseName'},
    //             {data: 'action', name: 'action'},
    //         ]
    //     });
    // });
</script>

@endpush

@include('import.datatable')