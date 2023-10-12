<div class="wizard-content mt-2" id="wizard3">
    <div class="wizard-pane">
        {{-- <div class="form-group row align-items-center">
            <label class="col-md-4 text-md-right text-left">Name</label>
            <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control">
            </div>
        </div> --}}
        {{-- <div class="form-group row align-items-center">
            <label class="col-md-4 text-md-right text-left">Email</label>
            <div class="col-lg-4 col-md-6">
                <input type="email" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 text-md-right text-left mt-2">Address</label>
            <div class="col-lg-4 col-md-6">
                <textarea class="form-control" name="address"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 text-md-right text-left mt-2">Role</label>
            <div class="col-lg-4 col-md-6">
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="developer" class="selectgroup-input">
                        <span class="selectgroup-button">Developer</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="ceo" class="selectgroup-input">
                        <span class="selectgroup-button">CEO</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"></div>
                <div class="col-lg-4 col-md-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4"></div>
            <div class="col-lg-4 col-md-6 text-right">
                <a href="#" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
            </div>
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
        showWizard(1);
        hideWizard(2); 
        hideWizard(3); 
    }
</script>
@endpush