<div class="wizard-content mt-2" id="wizard3">
    <div class="wizard-pane">

        <div class="section-title">Hasil Diagnosa</div>
        <div class="row">
            <div class="col-4 text-center">
                <div class="result">
                    <div class="pricing">
                        <div class="pricing-title">
                            Developer
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>$19</div>
                                <div>per month</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">1 user agent</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Core features</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">1GB storage</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">2 Custom domain</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Live Support</div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-cta">
                            <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="result">
            <div class="col-12 col-md-4 col-lg-4">
            </div>
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