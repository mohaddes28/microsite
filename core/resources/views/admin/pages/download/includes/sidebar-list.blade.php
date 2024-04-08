<div class="list-group" id="list-tab" role="tablist">
    <a href="{{ route('admin.page.download.main') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.download.main')) ? 'active' : '' }}">Main</a>

    <a href="{{ route('admin.page.download.installation') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.download.installation')) ? 'active' : '' }}">Installation</a>

    <a href="{{ route('admin.page.download.additional-content') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.download.additional-content')) ? 'active' : '' }}">Additional Content</a>

    <a href="{{ route('admin.page.download.seo') }}" class="list-group-item list-group-item-action {{ (request()->routeIs('admin.page.download.seo')) ? 'active' : '' }}">Seo</a>
</div>
