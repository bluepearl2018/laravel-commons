<div class="sm:flex sm:items-center">
	<div class="sm:flex-auto">
		<x-theme::h1>
			{{ __('Show ') . Str::title(Str::snake($name))  }} ({{ __('Details') }})
		</x-theme::h1>
		<p class="mt-2 text-md text-gray-700">{{ $lead  }}</p>
	</div>
	@auth
		<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
			<a href="{{ route($routePrefix . Str::slug(Str::plural($name)) . '.edit', $entry) }}"
			   class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
				{{ __('Edit '. Str::title(Str::snake(Str::Studly($class)))) }}
			</a>
		</div>
	@endauth
</div>
<div class="content-panel">
	<table class="w-full">
		<tbody>
		@forelse($fields as $key => $specs)
			<tr>
				<td class="w-48 table-cell">
					{{ $specs[3]}}
				</td>
				<td>
					{{$entry[$key]}}
				</td>
			</tr>
		@empty
		@endforelse
		</tbody>
	</table>
</div>