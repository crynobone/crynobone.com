@extends('orchestra/story::layout')

@section('content')
<div class="entry-meta"></div>
<header id="begin">
	<time datetime="{{ $page->published_at->format('Y-m-d') }}" id="top_time">
		{{ $page->published_at->format('F j, Y') }}
	</time>
</header>
<article id="{{ $page->id }}" class="post">
	<h2 class="entry-title">
		<a href="{{ $page->link }}" class="no-link" title="Permalink to {{{ $page->title }}}" rel="bookmark">
			{{ $page->title }}
		</a>
	</h2>

	<div class="entry-content">
		{{ $page->body }}
	</div>
	
	<hr>
	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'crynobone-com'; // required: replace example with your forum shortname

		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	
</article>
@stop
