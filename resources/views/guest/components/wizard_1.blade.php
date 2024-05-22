<div class="wizard-content mt-2" id="wizard1">
    <div class="wizard-pane">
        <center>
            <h4 class="mb-3 mt-5">{{ __('Selamat Datang Di Sistem Pakar Diagnosa Penyakit') }}</h4>
            <h5 class="my-3">{{ __('tekan tombol dibawah untuk melanjutkan') }}</h5>
            <button class="btn btn-icon icon-right btn-primary my-5" onclick="gotoStep2()">
                {{ __("Next") }}
                <i class="fas fa-arrow-right"></i>
            </button>
        </center>
    </div>
</div>

@push('scripts')
    <script>
        function gotoStep2() {
            hideWizard(1, false);
            showWizard(2);
        }
    </script>
@endpush