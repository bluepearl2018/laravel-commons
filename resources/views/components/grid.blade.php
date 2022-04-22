<div>
	<div class="sm:flex sm:items-center">
		<div class="sm:flex-auto">
			<h1 class="text-xl font-semibold text-gray-900">{{__('Listing of') }} {{ __(Str::title(Str::snake(Str::Studly($class)))) }}</h1>
			<p class="mt-2 text-md text-gray-700">{{ $lead  }}</p>
		</div>
		<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
			<a class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
				{{ __('Create new '. Str::title(Str::snake(Str::Studly($class)))) }}
			</a>
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
					<td class="lg:flex lg:flex-row lg:space-x-4 py-4 pl-4 pr-3 text-sm font-medium text-gray-700 w-48 max-w-48 sm:pl-6">
						<a href="{{ route('setup.'. Str::plural($class) . '.show', $entry) }}"
						   class="items-center self-center mx-0.5" title="{{__('show')}}"><i class="fa fa-eye"></i></a>
						<a href="{{ route('setup.'. Str::plural($class) . '.edit', $entry) }}"
						   class="items-center self-center mx-0.5" title="{{__('edit')}}"><i class="fa fa-edit"></i></a>
						<form class="items-center self-center mx-0.5"
							  action="{{ route('setup.'. Str::plural($class) . '.destroy', $entry) }}" method="post">
							@csrf
							@method('DELETE')
							<button onclick="return confirm('{{__("Are you sure ?") }}')"
									type="submit" title="{{__('delete')}}"><i class="fa fa-trash"></i></button>
						</form>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="3">
						{{__('NOTHING TO SHOW')}}
					</td>
				</tr>
			@endforelse
			</tbody>
		</table>
	</div>
</div>
