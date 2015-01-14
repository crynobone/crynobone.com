	<script src="{{ Theme::asset('assets/js/prettify.js') }}"></script>
		<link media="all" type="text/css" rel="stylesheet" href="{{ Theme::asset('assets/css/prettify.css') }}">
	<script>
	jQuery(document).ready(function ($) {
		$('code').addClass('prettyprint');
		prettyPrint();
		$(".logo").mouseenter(function () {
			$(".menu").stop().fadeIn("fast");
		});

		$("#user_nav").mouseleave(function () {
			$(".menu").stop().fadeOut("fast");
		});
	});
	</script>
	@stack('asset.footer')
	</body>
</html>
