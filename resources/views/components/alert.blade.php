@php
  $alert = session('alert');
  $type = $alert ? ($alert['status'] == 200 ? 'bg-green-800' : 'bg-red-800') : null;
  $message = $alert ? $alert['message'] : null;
@endphp

@if($alert)
  <div
    x-data="{ open: true }"
    x-init="setTimeout(() => open = false, 3000)"
    x-show="open"
    {{ $attributes->merge(['class' => 'px-4 py-5 '.$type]) }}
  >
    <span class="text-white text-center block">{{ $message }}</span>
  </div>
@endif