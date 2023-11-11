<!DOCTYPE html>
<html lang="en">

<head>
	@include('layout.head')
</head>

<body>
	<div class="wrapper">
		@include('layout.menu')
		<div class="main">
			@include('layout.nav')
			<main class="content">

                <!-- Pantalla de carga -->
				 <div id="loader-container">
					<div id="loader"></div>
				</div>

				<div class="container-fluid p-0">
					<h1 class="h3 mb-3">@yield('page-title', 'Default Title')</h1>

					 @yield('content')
				</div>
			</main>

			<footer class="footer">
				@include('layout.footer')
			</footer>
		</div>
	</div>

	@include('layout.script')

	<script>
		// Oculta la pantalla de carga una vez que la página esté completamente cargada
window.onload = function() {
    // Oculta el div de la pantalla de carga
    document.getElementById("loader-container").style.display = "none";
}

	</script>
</body>

</html>