<div class="sm:flex sm:items-center">
	<div class="sm:flex-auto">
		<h1 class="text-xl font-semibold text-gray-900">
			{{ __('Create new ') . __(Str::title(Str::replace('_', ' ', $name))) }}
		</h1>
		<p class="mt-2 text-md text-gray-700">{{ $lead }}</p>
	</div>
	<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
		<a href="{{ route($routePrefix . '.'. Str::slug(Str::plural($class)) . '.index') }}"
		   class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-md font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
			{{ __('List '. Str::title(Str::replace('-', ' ', Str::plural($class)))) }}
		</a>
	</div>
</div>
<div class="content-panel">
	<div class="">
		<form id="{{$class}}-create-frm" method="POST"
			  action="{{ route($routePrefix . '.' .  Str::slug(Str::plural($name)) . '.store') }}">
			@csrf
			@foreach($fields as $columnName => $specs)
				<x-dynamic-component :component="'theme-form-'.$specs[0].'-'.$specs[1]"
									 :specs="$specs"
									 :old="old($columnName)"
									 :columnName="$columnName"
									 model="{{ $specs[5] ?? '' }}"></x-dynamic-component>
			@endforeach
			<x-theme-form-save-buttons form="{{$class}}-create-frm"></x-theme-form-save-buttons>
		</form>
	</div>
</div>