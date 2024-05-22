@extends('layouts.landing')

@section('content')
<section>
    <h2 class="section-title">{{ __('Vaksin') }}</h2>
    <p class="section-lead">{{ __('Daftar Vaksin') }}</p>

    <div class="row">
        <div class="col-md-12 ">
            <div class="table-responsive">
                <table id="disease-table" class="table table-striped">
                    <thead>
                        <th>{{__('No')}}</th>
                        <th>{{__('Nama')}}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{__('1')}}</td>
                            <td>{{ __('Vaksin Sinovac') }}</td>
                        </tr>
                        <tr>
                            <td>{{__('2')}}</td>
                            <td>{{ __('Vaksin AstraZeneca') }}</td>
                        </tr>
                        <tr>
                            <td>{{__('3')}}</td>
                            <td>{{ __('Vaksin Moderna') }}</td>
                        </tr>
                        <tr>
                            <td>{{__('4')}}</td>
                            <td>{{ __('Vaksin Sinopharm') }}</td>
                        </tr>
                        <tr>
                            <td>{{__('5')}}</td>
                            <td>{{ __('Vaksin Pfizer') }}</td>
                        </tr>
                        <tr>
                            <td>{{__('6')}}</td>
                            <td>{{ __('Vaksin Moderna') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <h4>{{__('Daftar Vaksin')}}</h4>
                    <div class="card-header-action"></div>
                </div>
                <div class="card-body"> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</section>

<section>
    <h2 class="section-title">{{ __('Rumah Sakit Rujukan Covid') }}</h2>
    <p class="section-lead">{{ __('Daftar Rumah Sakit') }}</p>

    <div class="row">

    </div>
</section>

<section>
    <h2 class="section-title">{{ __('Pengobatan Infeksi Covid') }}</h2>
    {{-- <p class="section-lead">{{ __('Daftar Rumah ') }}</p> --}}

    <div class="row">

    </div>
</section>

<section>
    <h2 class="section-title">{{ __('Call Center') }}</h2>
    <p class="section-lead">{{ __('Daftar Call Center') }}</p>

    <div class="row">

    </div>
</section>

<section>
    <h2 class="section-title">{{ __('Protokol Kesehata') }}</h2>
    {{-- <p class="section-lead">{{ __('Daftar') }}</p> --}}

    <div class="row">

    </div>
</section>

<section>
    <h2 class="section-title">{{ __('Nomor Ambulan') }}</h2>
    <p class="section-lead">{{ __('Daftar Nomor Ambulan') }}</p>

    <div class="row">

    </div>
</section>
@endsection