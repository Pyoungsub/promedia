@props(['value'])

<<<<<<< HEAD
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
=======
<label {{ $attributes->merge(['class' => 'block font-medium text-gray-700']) }}>
>>>>>>> bc662e7 (modified code)
    {{ $value ?? $slot }}
</label>
