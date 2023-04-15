<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        @include('layouts.sidebar.sidebar_brand')
        <ul class="sidebar-menu">
            {{-- divided by section --}}
            @include('layouts.sidebar.dashboard')
            @include('layouts.sidebar.menu')
        </ul>
    </aside>
</div>
