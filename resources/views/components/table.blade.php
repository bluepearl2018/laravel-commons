<div">
	<div class="sm:flex sm:items-center">
		<div class="sm:flex-auto">
			<x-theme-h1
					class="text-xl font-semibold text-gray-900">{{__('Listing of') }} {{ __(Str::title(Str::replace('-', ' ', Str::plural($class)))) }}
			</x-theme-h1>
			<p class="mt-2 text-md text-gray-700">{{ $lead  }}</p>
		</div>
		<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
			@if(Route::has('admin.' . Str::snake(Str::slug(Str::snake(Str::plural($class)))) . '.create'))
				<a href="{{ route('admin.' . Str::snake(Str::slug(Str::snake(Str::plural($class)))) . '.create') }}"
				   class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
					{{ __('Create new '. Str::title(Str::replace('-', ' ', $class))) }}
				</a>
			@elseif(Route::has('setup.' . Str::snake(Str::slug(Str::snake(Str::plural($class)))) . '.create'))
				<a href="{{ route('setup.' . Str::snake(Str::slug(Str::snake(Str::plural($class)))) . '.create') }}"
				   class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
					{{ __('Create new '. Str::title(Str::replace('-', ' ', $class))) }}
				</a>
			@endif
		</div>
	</div>

	<div class="-mx-4 mt-4 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
		<table id="{{$class}}-id-tbl" class="min-w-full divide-y divide-gray-300">
			{{-- Head--}}
			<thead class="bg-gray-50">
			<tr>
				@for($i = 0; $i < 2; $i++)
					<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
						{{ array_keys($fields)[$i] }}
					</th>
				@endfor
				<th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
					<span class="sr-only">{{__('View')}}</span>
					<span class="sr-only">{{__('Edit')}}</span>
					<span class="sr-only">{{__('Trash')}}</span>
				</th>
			</tr>
			</thead>
			{{-- Body--}}
			<tbody class="divide-y divide-gray-200 bg-white">
			@forelse($entries as $entry)
				<tr>
					<td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
						{{ $entry[array_keys($fields)[0]] }}
					</td>
					<td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
						{{ $entry[array_keys($fields)[1]] }}
					</td>
					@if($routePrefix)
						<td class="lg:flex lg:flex-row lg:space-x-4 py-4 pl-4 pr-3 text-sm font-medium text-gray-700 w-48 max-w-48 sm:pl-6">
							@if(Route::has($routePrefix . Str::plural($class) . '.show'))
								<a href="{{ route($routePrefix . Str::plural($class) . '.show', $entry) }}"
								   class="items-center self-center mx-0.5" title="{{__('show')}}"><i
											class="fa fa-eye"></i></a>
							@endif
							@if(Route::has($routePrefix . Str::plural($class) . '.edit'))
								<a href="{{ route($routePrefix . Str::slug(Str::plural($class)) . '.edit', $entry) }}"
								   class="items-center self-center mx-0.5" title="{{__('edit')}}"><i
											class="fa fa-edit"></i></a>
							@endif
							@if(Route::has($routePrefix . Str::plural($class) . '.destroy'))
								<form class="items-center self-center mx-0.5"
									  action="{{ route($routePrefix . Str::plural($class) . '.destroy', $entry) }}"
									  method="post">
									@csrf
									@method('DELETE')
									<button onclick="return confirm('{{__("Are you sure ?") }}')"
											type="submit" title="{{__('delete')}}"><i class="fa fa-trash"></i></button>
								</form>
							@endif
						</td>
					@endif
				</tr>
			@empty
				<tr>
					<td colspan="3">
						<div class="bg-amber-200 p-4">
							{{__('NOTHING TO SHOW')}}
						</div>
					</td>
				</tr>
			@endforelse
			</tbody>
			@if($entries instanceof \Illuminate\Pagination\LengthAwarePaginator)
				<tfoot>
				<tr>
					<td colspan="3" class="bg-gray-50 p-3">
						{{$entries->links() ?? ''}}
					</td>
				</tfoot>
			@endif
		</table>
	</div>
</div>
