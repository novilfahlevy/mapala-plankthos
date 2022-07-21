@php
  $alert = session('alert');
  $type = $alert ? ($alert['status'] == 200 ? 'green' : 'red') : null;
  $message = $alert ? $alert['message'] : null;
@endphp

@if($alert)
  <div
    x-data="{ open: true }"
    x-init="setTimeout(() => open = false, 3000)"
    x-show="open"
    {{ $attributes->merge(['class' => 'px-4 py-5 bg-'.$type.'-800']) }}
  >
    <span class="text-white text-center block">{{ $message }}</span>
  </div>
@endif