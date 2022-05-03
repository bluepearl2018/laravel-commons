<div class="flex flex-col space-y-2 mb-4">
	<label for="{{ Str::slug($name).'-id' }}">{{ $label }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ $tip  }}</span>
	<select type="select" id="{{ Str::slug($name).'-id' }}" name="{{ Str::snake($name).'_id' }}"
			class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300
			focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1" {{$required == 'required' ? 'required' : ''}} {{ $readonly == 'readonly' ? 'disabled' : '' }}>
		<option value=">{{ __('Select') }}</option>
		@forelse($entries as $option)
			<option value="{{ $option->id }}" {!! $old == $option->id  ? 'selected' : '' !!} >
				{{ $option->name }}
			</option>
		@empty
		@endforelse
	</select>
	@if(isset($errors) && $errors->has($name))
		<div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
	@endif
</div>
