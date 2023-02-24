@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}"
        class="border border-gray-200 w-full p-2 rounded " 
        placeholder="Insert your {{ $name }}" 
        {{ $attributes(['value' => old($name) ]) }}>

    <x-form.error name="{{ $name }}" />
</x-form.field>
