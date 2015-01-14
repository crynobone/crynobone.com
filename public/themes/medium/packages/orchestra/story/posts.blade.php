@extends('orchestra/story::layout')

<?php $begin = Carbon\Carbon::now(); ?>

@section('content')
<div class="entry-meta"></div>
<header id="begin">
	<time datetime="{{ $begin->format('Y-m-d') }}" id="top_time">
		{{ $begin->format('M j, Y') }}
	</time>
</header>
@foreach ($posts as $post)
<article id="{{ $post->id }}" class="post">
	<h2 class="entry-title">
		<a href="{{ $post->link }}" class="no-link" title="Permalink to {{{ $post->title }}}" rel="bookmark">
			{{ $post->title }}
		</a>
	</h2>

	<div class="entry-content">
		{!! $post->body !!}
	</div>
</article>
@endforeach
@stop
