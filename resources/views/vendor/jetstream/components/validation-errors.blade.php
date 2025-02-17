@if ($errors->any())
    <div {{ $attributes }}>
<<<<<<< HEAD
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

=======
>>>>>>> bc662e7 (modified code)
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
