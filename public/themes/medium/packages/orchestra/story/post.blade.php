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
		{!! $page->body !!}
	</div>

	<hr>

	@include('orchestra/story::comments')

</article>
@stop
