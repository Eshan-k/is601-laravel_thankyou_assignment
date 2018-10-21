<!doctype html>
<html lang="en">
@include('includes.head')

<body>
<div class="container">
	<header>
		@include('includes.header')
	</header>
	
	<main role="main">
		@yield('content')
	</main>
	
	@include('includes.js_footer')

</div>
</body>
</html>