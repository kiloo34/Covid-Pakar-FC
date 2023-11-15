@extends('layouts.myview')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $message)
<div class="alert alert-danger alert-dismissible show fade">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ $message }}
    </div>
@endforeach
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ ucwords(str_replace('_', ' ', $title)) }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('pakar.gejala.index') }}" class="btn btn-danger">{{ __('Kembali') }} </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pakar.gejala.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Nama Wabah / Penyakit / Virus") }}</label>
                        <select name="diseaseCategory" id="disease" class="form-control @error('diseaseCategory') is-invalid @enderror" value="{{ old('diseaseCategory') }}" autofocus>
                            <option value="">{{ __("Pilih Kategori Wabah / Penyakit / Virus") }}</option>
                            @foreach ($diseaseCategories as $diseaseCategory)
                                <option value="{{$diseaseCategory->id}}"> {{ ucfirst($diseases->find($diseaseCategory->disease_id)->name) }} - {{ ucfirst($diseaseCategory->name) }}</option>
                            @endforeach
                        </select>
                        @error('diseaseCategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>{{ __("Nama Kategori Gejala") }}</label>
                        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" autofocus>
                            <option value="">{{ __("Pilih Nama Gejala") }}</option>
                            @foreach ($symptomCategories as $category)
                                <option value="{{$category->id}}">{{ ucfirst($category->symptom->name) }} {{ ucfirst($category->name) }}</option>
                            @endforeach
                            <option value="new">{{ __("Data Kategori Gejala Baru") }}</option>
                        </select>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div id="symptomNewData">
                        <div class="form-group">
                            <label>{{ __("Nama Gejala") }}</label>
                            <select name="symptomName" id="symptomName" class="form-control @error('symptomName') is-invalid @enderror" value="{{ old('symptomName') }}" autofocus>
                                <option value="">{{ __("Pilih Nama Gejala") }}</option>
                                @foreach ($symptoms as $symptom)
                                    <option value="{{$symptom->id}}">{{ ucfirst($symptom->name) }}</option>
                                @endforeach
                                <option value="new">{{ __("Data Gejala Baru") }}</option>
                            </select>
                            @error('symptomName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div id="symptomNewName">
                            <div class="form-group">
                                <label>{{ __("Nama Gejala Baru") }}</label>
                                <input name="symptomNameNew" type="text" class="form-control @error('symptomNameNew') is-invalid @enderror"
                                    value="" autocomplete="" autofocus>
                                @error('symptomNameNew')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>{{ __("Nama Kategori Gejala Baru") }}</label>
                            <input name="symptomCategoryName" type="text" class="form-control @error('symptomCategoryName') is-invalid @enderror"
                                value="" autocomplete="" autofocus>
                            @error('symptomCategoryName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label>{{ __("Kode") }}</label>
                            <input name="code" type="text" class="form-control @error('code') is-invalid @enderror"
                                value="{{ old('code') }}" autocomplete="code" placeholder="Kosongkan jika ingin generate otomatis" autofocus readonly>
                            @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary float-right" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@include('import.select2')

@push('scripts')
    <script>
        $(document).ready(function () {
            $("#disease").select2();
            $("#category").select2();
            $("#symptomName").select2();

            resetForm()
            
            $('#category').on('select2:select', function (e) {
                var data = e.params.data;
                data.id === 'new' ? displayNewSypmtomData(true) : displayNewSypmtomData() 
            });
            $('#symptomName').on('select2:select', function (e) {
                var data = e.params.data;
                data.id === 'new' ? displayNewSypmtomName(true) : displayNewSypmtomName() 
            });
        });

        function displayNewSypmtomData(show = false) {
            var type = show === false ? 'none' : 'block'
            document.getElementById('symptomNewData').style.display = type
        }

        function displayNewSypmtomName(show = false) {
            var type = show === false ? 'none' : 'block'
            document.getElementById('symptomNewName').style.display = type
        }

        function resetForm() {
            displayNewSypmtomData()
            displayNewSypmtomName()

            $('#category').val(null).trigger('change');
            $('#disease').val(null).trigger('change');
            $('#symptomName').val(null).trigger('change'); 
        }
    </script>
@endpush