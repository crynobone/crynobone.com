@extends('orchestra/story::layout')

@section('content')
<div class="entry-meta"></div>
<header id="begin">
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
</article>
@stop
