@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

<<<<<<< HEAD
    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
=======
    <div class="flex flex-row justify-end px-6 py-4 text-right">
>>>>>>> bc662e7 (modified code)
        {{ $footer }}
    </div>
</x-jet-modal>
