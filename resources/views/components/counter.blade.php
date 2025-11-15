@props([
    'id' => uniqid(),
])

@php
    $initialValue = 0;
    $key = $id . '_count';
@endphp

<div @signals([$key => $initialValue]) class="flex items-center gap-4">

    <button data-on:click="${{ $key }}--" class="btn-icon rounded-none">@icon('minus')</button>

    <p data-text="${{ $key }}" class="size-10 flex items-center justify-center shrink-0 border border-dashed">
        {{ $initialValue }}
    </p>

    <button data-on:click="${{ $key }}++" class="btn-icon rounded-none">@icon('plus')</button>
</div>
