<div class="wizard-content mt-2" id="wizard2">
    <div class="wizard-pane">

        <center>
            <div class="my-5">
                <h4>{{ __("Silakan Isi Setiap pertanyaan yang sudah disediakan") }}</h4>
                <p>{{ __("Tidak semua field harus diisi, jadi pastikan untuk memberikan jawaban yang tepat.") }}</p>
            </div>
        </center>
        <form action="" method="post" id="diagnoseForm1">
            @csrf
                {{-- @foreach ($gejalas as $gejala)
                <div class="col-12 col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <h5>{{ ucfirst($gejala->name) ?? "" }}</h5>
                        @foreach ($gejala->symptom_categories as $category) 
                        <input class="form-check-input" type="checkbox" name="category[]" id="" >
                        <label class="form-check-label" for="">
                            {{ $category->name }} 
                        </label>
                        <label class="d-block">{{ $category->name }}</label>
                            <input type="checkbox" class="form-control" id="cbx-{{ $category->id }}">
                            <label class="form" for="cbx-{{ $category->id }}">{{ $category->name }}</label>
                        @endforeach
                        <select class="form-control symptomCategory" multiple="" name="gejala[]">
                            <option value="">{{ __("Pilih disini") }}</option>
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                        </select>
                    </div>
                </div>
                @endforeach --}}

                <div class="row">
                    @foreach ($gejalas as $gejala)
                    <div class="col-12 col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="d-block">{{ ucfirst($gejala->name) ?? "" }}</label>
                            @foreach ($gejala->symptom_categories as $category) 
                            <div class="form-check">
                                <input class="form-check-input categorySymptomCheckbox" type="checkbox" name="categorySymptoms[]" value="{{$category->code}}" id="categorySymptom{{$category->id}}" />
                                <label class="form-check-label" for="categorySymptom{{$category->id}}">
                                    {{ ucfirst($category->name) ?? "" }} {{ $category->code }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>


            <button type="button" class="btn btn-icon icon-right btn-danger my-5" onclick="backToWizard1()">
                <i class="fas fa-arrow-left"></i>
                {{ __("Kembali") }}
            </button>
            <button type="submit" class="btn btn-icon icon-right btn-primary my-5 float-right" onclick="nextToWizard3()">
                {{ __("Next") }}
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

@include('import.select2')

@push('scripts')
<script>

    $(document).ready(function () {
        symptomCategory
    });

    function backToWizard1() {
        showWizard(1);
        hideWizard(2);
    }

    function nextToWizard3() {
        
        $("#diagnoseForm1").submit(function(e) {
            e.preventDefault(); 

            Swal.fire({
                title: 'Data Gejala Akan di Submit',
                text: "Yakin Submit Form Data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya!'
            }).then((result) => {
                if (result.value) {
                    var form = $(this);
                    var url = "{{ route('guest.diagnose.store') }}"

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // serializes the form's elements.
                        success: function(datas) {
                            showWizard(3, datas);
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: "",
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                }
            });
        });
        

        // showWizard(3);
        // hideWizard(2, false); 
    }

</script>
@endpush