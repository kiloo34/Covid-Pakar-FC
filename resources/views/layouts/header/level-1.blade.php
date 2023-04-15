<div class="breadcrumb-item">
    @auth
    <a href="{{ route(auth()->user()->role->name.'.'.$title.'.index') }}">
    @else
    <a href="#">
    @endauth
        SPFC
    </a>
</div>