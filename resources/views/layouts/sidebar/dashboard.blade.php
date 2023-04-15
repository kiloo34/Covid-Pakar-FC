<li class="{{ $active == 'dashboard' ? 'active' : '' }}">
    @if (auth()->user()->role->name == 'admin')
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link">
    @elseif (auth()->user()->role->name == 'pakar')
    <a href="{{ route('pakar.dashboard.index') }}" class="brand-link">
    @endif
        <i class="far fa-home"></i>
        <span>{{__('Dashboard')}}</span>
    </a>
</li>