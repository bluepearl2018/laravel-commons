<div class="sm:flex sm:items-center" xmlns:x-theme="http://www.w3.org/1999/html">
	<div class="sm:flex-auto">
		<x-theme::h1>
			{{ __('Edit ') . __(Str::title(Str::snake($name))) }} ({{ __('Details') }})
		</x-theme::h1>
		<p class="mt-2 text-md text-gray-700">{{ $lead }}</p>
	</div>
	<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
		<a href="{{ route($routePrefix . Str::plural(Str::slug($name)) . '.index', [$class => $entry]) }}"
		   class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
			{{ __('List '. Str::title(Str::snake(Str::Studly(\Str::plural($class))))) }}
		</a>
	</div>
</div>
<div class="content-panel mt-6">
	<div class="columns-2">
		<form id="{{$class}}-update-frm" method="POST"
			  action="{{ route($routePrefix . Str::plural(Str::slug($name)) . '.update', [Str::snake(Str::Studly($class)) => $entry]) }}">
			@csrf
			@method('PUT')
			@foreach($fields as $columnName => $specs)
				<x-dynamic-component :component="'theme::forms.'.$specs[0].'-'.$specs[1]"
									 :name="$columnName"
									 :id="Str::slug($columnName)"
									 :placeholder=" $specs[3]"
									 :required="$specs[2]"
									 :label="trans('fields.'.Str::snake($columnName))"
									 :tip="$specs[4]"
									 :readonly="$specs[5] ?? NULL"
									 :model="$specs[5] ?? NULL"
									 :old="$entry->$columnName"
									 :errors="$errors ?? NULL"
									 :columnName="$columnName"></x-dynamic-component>
			@endforeach
			<x-theme::forms.update-buttons form="{{$class}}-update-frm"></x-theme::forms.update-buttons>
		</form>
	</div>
</div>