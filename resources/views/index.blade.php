@extends('frontend::layouts.master')
@auth('admin')
@section('content')
	<x-theme::h1>About laravel commons</x-theme::h1>
	<p class="mb-2 italic">Laravel commons est le module de référence pour toutes les fonctions, contenus, communs... réutilisables dans Eutranet.</p>
	<div class="container">
		<x-theme::h2 class="mt-4">Installation</x-theme::h2>
		<p>Le module s'installe à l'aide de la commande eutranet:install-theme.</p>
		<ul class="list-disc list-inside">
			<li>upload package and add entry to composer.json repositories array, with symlink</li>
			<li>composer require eutranet/laravel-theme</li>
			<li>php artisan eutranet:intall-theme</li>
			<li>php artisan optimize</li>
			<li>visit http://127.0.0.1:8000/init</li>
		</ul>
		<x-theme::h2 class="mt-4">Models</x-theme::h2>
		<p>Les modèles, comme les pays, langues, etc. sont disponibles en plusieurs langues. L'objectif est de
			pouvoir les réutiliser partout où c'est possible, y compris dans les formulaires.</p>
		<p>Dans quelque temps, l'ensemble des vues seront remplacées par une vue unique bourrée de logique.</p>
		<x-theme::h2 class="mt-4">Façades</x-theme::h2>
		<p>Les façades permettent d'afficher des formulaires automatiques, mais encore des
			listes déroulantes, etc. Celles-ci sont couplées à des vues sous "components".</p>
		<x-theme::h2 class="mt-4">Composers</x-theme::h2>
		<p>Les composers vont à la recherche d'informations à rendre dans les vues.</p>
		<x-theme::h2 class="mt-4">Traits</x-theme::h2>
		<p>Les traits du package sont essentiellement applicables à l'UI.</p>
	</div>
@endsection
@endauth