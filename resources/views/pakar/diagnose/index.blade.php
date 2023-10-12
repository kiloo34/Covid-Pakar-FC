@extends('layouts.myview')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __("Form ") }} {{ ucfirst($title) }}</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        @include('pakar.diagnose.components.wizard_step')
                    </div>
                </div>

                @include('pakar.diagnose.components.wizard_1', ["wizard" => 1])
                @include('pakar.diagnose.components.wizard_2', ["wizard" => 2])
                @include('pakar.diagnose.components.wizard_3', ["wizard" => 3])
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            hideWizard(2);
            hideWizard(3);
            $(".categorySymptomCheckbox").prop("checked", false);
        });

        function showWizard(id) {
            var target = "wizard"+id
            var step = "#wizardStep"+id
            document.getElementById(target).style.display = 'block';
            $(step).addClass('wizard-step-active');
        }
        
        function hideWizard(id, condition = true) {
            var target = "wizard"+id
            var step = "#wizardStep"+id
            document.getElementById(target).style.display = 'none';
            if (condition) {
                $(step).removeClass('wizard-step-active');
            }
        }
    </script>
@endpush