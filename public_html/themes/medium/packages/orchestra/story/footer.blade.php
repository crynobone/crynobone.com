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
	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9170846-19']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>
	</body>
</html>
