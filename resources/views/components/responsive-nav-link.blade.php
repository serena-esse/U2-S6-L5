@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block w-100 pl-3 pr-4 py-2 border-left border-primary text-left text-base font-weight-medium text-primary bg-light focus:outline-none focus:text-primary focus:bg-light focus:border-primary transition ease-in-out duration-150'
            : 'd-block w-100 pl-3 pr-4 py-2 border-left border-transparent text-left text-base font-weight-medium text-secondary hover:text-dark hover:bg-light hover:border-gray-300 focus:outline-none focus:text-dark focus:bg-light focus:border-gray-300 transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
