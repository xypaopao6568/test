<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')

<body>
	<!--/header-->
    @include('page.layout.header')
	@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
	@endif
	@if(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
	@endif
	@if(session('success'))
    <div class="alert alert-info">
        {{ session('success') }}
    </div>
	@endif




	<!--/slider-->
	@include('page.layout.slider')
	
	@include('page.layout.list_product')
	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>