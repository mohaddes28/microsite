<div class="list-group" id="list-tab" role="tablist">
    <a href="{{ route('admin.page.home.main-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.main-section')) ? 'active' : '' }}">Main Section</a>

    <a href="{{ route('admin.page.home.about-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.about-section')) ? 'active' : '' }}">About Section</a>

    <a href="{{ route('admin.page.home.feature-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.feature-section')) ? 'active' : '' }}">Feature Section</a>

    <a href="{{ route('admin.page.home.download-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.download-section')) ? 'active' : '' }}">Download Section</a>

    <a href="{{ route('admin.page.home.install-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.install-section')) ? 'active' : '' }}">Install Section</a>

    <a href="{{ route('admin.page.home.working-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.working-section')) ? 'active' : '' }}">How It Works Section</a>

    <a href="{{ route('admin.page.home.screenshot-section') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.home.screenshot-section')) ? 'active' : '' }}">Interface Section <small>(screenshot)</small></a>
</div>
