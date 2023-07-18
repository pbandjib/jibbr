<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full h-10 mt-10 rounded-lg bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ']) }}>
    {{ $slot }}
</button>
