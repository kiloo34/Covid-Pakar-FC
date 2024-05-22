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

@include('import.datatable')
@push('scripts')
    <script>
        $(document).ready(function () {
            hideWizard(2);
            hideWizard(3);
            $(".categorySymptomCheckbox").prop("checked", false);
        });

        function showWizard(id, datas = null) {
            var target = "wizard"+id
            var step = "#wizardStep"+id

            if (id === 3 && datas !== null) {
                var table = document.getElementById('#processTable > tbody')
                var content = '';
                $.each(datas['process'], function (indexInArray, data) { 
                    content += '<tr>'
                    content += '<th scope="row">' + (indexInArray+1) + '</th>'
                    content += '<td>' + data.category + '</td>'
                    content += '<td>' + data.ruleEqualsPercent + '</td>'
                    content += '<td><button class="btn btn-smal btn-primary" onClick=buttonDetail(' + data.ruleId + ')>Detail</button></td>'
                    content += '</tr>'
                });
                $('#processTable > tbody').append(content);
                hideWizard(2, false);
            }
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

        function buttonDetail(id) {
           console.log('masuk'); 
           console.log(id); 
        }
    </script>
@endpush