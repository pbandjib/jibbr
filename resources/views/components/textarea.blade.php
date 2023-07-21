@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-xl bg-brand-gray shadow-xl border-transparent focus:border-1 focus:border-blue-300 focus:border']) !!}>{{$slot}}</textarea>
