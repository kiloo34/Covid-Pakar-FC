<div class="section-header">
    <h1>{{ucfirst($title)}}</h1>
    <div class="section-header-breadcrumb">
        @include('layouts.header.level-1')
        @include('layouts.header.level-2')
        @if ($subtitle != null)
        @include('layouts.header.level-3')
        @endif
    </div>
</div>
