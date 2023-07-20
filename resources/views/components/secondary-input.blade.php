@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-full bg-brand-gray shadow-xl border-transparent focus:border-1 focus:border-blue-300 focus:border']) !!}>
