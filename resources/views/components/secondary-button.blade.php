<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-light border shadow-sm font-weight-bold text-uppercase text-secondary tracking-widest']) }}>
    {{ $slot }}
</button>
