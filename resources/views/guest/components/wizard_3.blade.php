<div class="wizard-content mt-2" id="wizard3">
    <div class="wizard-pane">

        <div class="section-title">Hasil Diagnosa</div>
        <div class="row">
            
        </div>
        <div id="result">
            
        </div>
        {{-- <div class="table-responsive">
            <table class="table table-sm" id="processTable">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nama Gejala</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody></tbody>
            </table>
        </div> --}}
        
        <center>
            <button class="btn btn-icon icon-right btn-danger my-5" onclick="backToWizard2()">
                <i class="fas fa-arrow-left"></i>
                {{ __("Kembali") }}
            </button>
            <button class="btn btn-icon icon-right btn-primary my-5" onclick="reset()">
                {{ __("Diagnosa Ulang") }}
                <i class="fas fa-arrow-right"></i>
            </button>
        </center>
    </div>
</div>

@push('scripts')
<script>
    function backToWizard2() {
        showWizard(2);
        hideWizard(3);
    }

    function reset() {
        location.reload();
    }
</script>
@endpush