<div class="section-header">
    <h1>
        @if ($title == 'outgoing')
        {{__('Obat Keluar')}}    
        @elseif ($title == 'ingoing')
        {{__('Obat Masuk')}}
        @elseif ($title == 'rekap')
        {{__('Rekap Data Transaksi Obat')}}
        @else
        {{ucfirst($title)}}
        @endif
    </h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">SIPPO</a></div>
        {{-- @if (auth()->user()->role_id == 1)
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">SIMPELAN</a></div>
        @else
        <div class="breadcrumb-item"><a href="{{ route('holtikultura.dashboard') }}">SIMPELAN</a></div>
        @endif --}}
        @if ($subtitle == null)
        <div class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">{{ $title }}</a>
        </div>
        @else
        @if ($title == 'dashboard')
        <div class="breadcrumb-item"><a href="#">{{ucfirst($title)}}</a></div>
        @else
        <div class="breadcrumb-item"><a href="{{ route($title.'.index', $id ?? '') }}">{{ucfirst($title)}}</a></div>
        @endif
        <div class="breadcrumb-item active">{{ucfirst($subtitle)}}</div>
        @endif
    </div>
</div>
