@props(['size' => 'normal'])

@php
    $classes = [
        'small' => 'h-10 w-10',
        'normal' => 'h-12 w-12',
        'large' => 'h-16 w-16'
    ][$size] ?? 'h-12 w-12';
@endphp

<div class="flex-shrink-0">
    <img src="{{ asset('images/event_sphere_logo.jpg') }}" 
         alt="{{ config('app.name') }}" 
         {{ $attributes->merge(['class' => $classes . ' rounded-full object-cover border-2 border-gray-200 shadow-sm']) }}>
</div> 