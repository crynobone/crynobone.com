	<script>
	jQuery(document).ready(function ($) {
		$(".logo").mouseenter(function () {
			$(".menu").stop().fadeIn("fast");
		});
		
		$("#user_nav").mouseleave(function () {
			$(".menu").stop().fadeOut("fast");
		});
	});

	</script>
	</body>
</html>
