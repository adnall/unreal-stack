<button type="button" aria-label="Toggle dark mode" onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'))"
    {{ $attributes->merge([
        'class' => 'btn-icon-outline',
    ]) }}>
    @icon('moon', ['class' => 'hidden dark:flex'])
    @icon('sun', ['class' => 'block dark:hidden'])
</button>
