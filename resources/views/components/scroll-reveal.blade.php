@props([
    'variant' => 'fade-up',
    'delay' => 0,
    'class' => ''
])

<div class="scroll-reveal {{ $variant }} {{ $class }}" style="transition-delay: {{ $delay }}ms">
    {{ $slot }}
</div>
