@php
    $classes = 'p-4 bg-green-200/5 rounded-xl border border-transparent hover:border-green-700 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class'=>$classes]) }}>
    {{ $slot }}
</div>
