@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-xl shadow-md focus:ring-0 border-1 border-transparent focus:border-1 focus:border-blue-300 focus:border']) !!}>
