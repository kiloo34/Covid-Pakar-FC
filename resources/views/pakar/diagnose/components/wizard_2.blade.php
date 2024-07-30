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
            <div class="progress mb-4">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="wizard-content">
                @php
                    $selectedIndex = 0;
                @endphp
                <fieldset class="form-group">
                    @foreach ($gejalas as $index => $category)
                    <div class="row" id="row{{$index}}" style="{{ $index == 0 ? 'display: flex;' : 'display: none;' }}">
                        <div class="col-form-label col-6 pt-0">
                            @if ($category->custom_question == null)
                            Apakah Anda Merasakan {{ ucfirst($category->symptom->name) }} {{ ucfirst($category->name) ?? "" }}        
                            <!-- Apakah Anda Merasakan  -->
                            @else 
                            {{ $category->custom_question }}
                            @endif
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categorySymptoms[{{$index}}]" id="opt1{{$index}}" value="{{$category->code}}">
                                <label class="form-check-label" for="opt1{{$index}}">Ya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categorySymptoms[{{$index}}]" id="opt0{{$index}}" value="0" checked>
                                <label class="form-check-label" for="opt0{{$index}}">Tidak</label>
                            </div>  
                        </div>
                    </div>
                    @endforeach 
                </fieldset>
            </div>
            <div class="mt-4 d-flex justify-content-around">
                <button type="button" class="btn btn-icon icon-right btn-danger my-5" id="backQuestionBtn" onclick="backQuestion()"><i class="fas fa-arrow-left"></i> {{ __("Kembali") }}</button>
                <button type="button" class="btn btn-icon icon-right btn-danger my-5" id="backBtn" onclick="backToWizard1()"><i class="fas fa-arrow-left"></i> {{ __("Kembali") }}</button>
                <button type="button" class="btn btn-icon icon-right btn-primary my-5" id="nextQuestionBtn" onclick="nextQuestion()">{{ __("Next") }} <i class="fas fa-arrow-right"></i></button>
                <button type="submit" class="btn btn-icon icon-right btn-primary my-5" id="nextBtn" onclick="nextToWizard3()">{{ __("Next") }} <i class="fas fa-arrow-right"></i></button>
            </div>
        </form>
    </div>
</div>

@include('import.select2')

@push('scripts')
<script>
    var selectedIndex = {{ $selectedIndex }};
    function backToWizard1() {
        showWizard(1);
        hideWizard(2);
    }
    function nextQuestion() {
        if (selectedIndex < {{ count($gejalas) - 1 }}) {
            document.getElementById('row' + selectedIndex).style.display = 'none';
            selectedIndex++;
            document.getElementById('row' + selectedIndex).style.display = 'flex';
            updateButtons();
            updateProgressBar(selectedIndex);
        }
    }
    function backQuestion() {
        if (selectedIndex > 0) {
            document.getElementById('row' + selectedIndex).style.display = 'none';
            selectedIndex--;
            document.getElementById('row' + selectedIndex).style.display = 'flex';
            updateButtons();
            updateProgressBar(selectedIndex);
        }
    }
    function updateButtons() {
        document.getElementById('backBtn').style.display = selectedIndex === 0 ? 'inline-block' : 'none';
        document.getElementById('nextBtn').style.display = selectedIndex === {{ count($gejalas) - 1 }} ? 'inline-block' : 'none';
        document.getElementById('backQuestionBtn').style.display = selectedIndex > 0 ? 'inline-block' : 'none';
        document.getElementById('nextQuestionBtn').style.display = selectedIndex < {{ count($gejalas) - 1 }} ? 'inline-block' : 'none';
    }
    function updateProgressBar(step) {
        var totalSteps = {{ count($gejalas) }};
        var percentage = ((step + 1) / totalSteps) * 100;
        document.querySelector('.progress-bar').style.width = percentage + '%';
        document.querySelector('.progress-bar').textContent = percentage.toFixed(0) + '%';;
        document.querySelector('.progress-bar').setAttribute('aria-valuenow', percentage);
    }
    // Initialize the form on page load
    document.addEventListener('DOMContentLoaded', function() {
        updateButtons();
        updateProgressBar(selectedIndex);
    });
    
    function hideWizard(id, condition = true) {
        var target = "wizard"+id
        var step = "#wizardStep"+id
        document.getElementById(target).style.display = 'none';
        if (condition) {
            $(step).removeClass('wizard-step-active');
        }
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
                    var url = "{{ route('pakar.diagnosa.store') }}"
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
    }
</script>
@endpush