<div class="logo-bottom">
	<img src="{{{ config('admin.logo_bottom') }}}">
</div>
<ul class="sidebar-menu">
	@foreach (Admin::instance()->getMenu() as $item)
		{!! $item !!}
	@endforeach
</ul>