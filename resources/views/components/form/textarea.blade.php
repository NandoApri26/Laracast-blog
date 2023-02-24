@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 w-full p-2 rounded">
        {{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
