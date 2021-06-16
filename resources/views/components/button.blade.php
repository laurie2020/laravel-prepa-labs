<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn', 'style' => 'background-color: #23324b; color: white; padding: 5px 25px']) }}>
    {{ $slot }}
</button>
