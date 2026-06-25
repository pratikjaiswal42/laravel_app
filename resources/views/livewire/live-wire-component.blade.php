<div class="mb-10">
    {{-- An unexamined life is not worth living. - Socrates --}}
    {{ $counter }}
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <button wire:click="page1">Page 1</button>
    <button wire:click="page2">Page 2</button>

    @if($page == 'page1')
        <h1>Page 1</h1>
    @elseif($page == 'page2')
        <h1>Page 2</h1>
    @endif

    {{ $page1 }}

    <div wire:offline>
        <h1>You are Offline</h1>
    </div>
</div>
