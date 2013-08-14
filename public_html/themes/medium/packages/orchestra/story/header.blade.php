<!DOCTYPE html>
<?php 

use Illuminate\Support\Facades\HTML;
use Orchestra\Support\Facades\Theme; ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		{{ HTML::title() }}
		<script src="{{ asset('packages/orchestra/foundation/js/jquery.min.js') }}"></script>
		<link media="all" type="text/css" rel="stylesheet" href="{{ Theme::asset('assets/css/style.css') }}">
	</head>
	<body class="story">
		<header id="sidebar">
			<ul id="user_nav">
				<figure class="logo medium">
					<a href="{{ handles('orchestra/story::/') }}">
						{{ memorize('site.name') }}
					</a>
				</figure>
				<div class="menu-main-menu-container">
					<ul id="menu-main-menu" class="menu" style="display: none;">
						<li><a href="{{ handles('orchestra/story::/') }}">Home</a></li>
						<li><a href="{{ handles('orchestra/story::about') }}">About</a></li>
					</ul>
				</div>
			</ul>
			<hgroup>
				<h1>
					<a href="{{ handles('orchestra/story::/') }}">
						{{ memorize('site.name') }}
					</a>
				</h1>
				<h3>{{ memorize('site.description') }}</h3>
				
				<iframe src="http://ghbtns.com/github-btn.html?user=crynobone&amp;type=follow&amp;count=true" 
					allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe>
			</hgroup>
		</header>
