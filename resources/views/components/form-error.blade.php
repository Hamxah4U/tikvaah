
{{-- @props(['name']) --}}

@props(['name', 'bag' => 'default'])

{{-- @error($name) --}}
@error($name, $bag)
  <small class="text-danger error-message">{{ $message }}</small>
@enderror