<div class="breadcrumb-item {{ $subtitle == null ? 'active' : '' }}">
    @auth
    <a href="{{ route(auth()->user()->role->name.'.'.$title.'.index') }}">
    @else
    <a href="#">
    @endauth
    {{ucfirst($title)}}
    </a>
</div>