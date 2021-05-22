<div class="p-6 text-center">
    <h1 class="text-xl mb-4">Counter</h1>
    <span>{{ $count }}</span>
    <button wire:click="decrement"
            class="bg-gray-100 ml-2 py-2 px-4 rounded"
            >
        -
    </button>
    <button wire:click="increment"
            class="bg-gray-100 ml-2 py-2 px-4 rounded"
            >
        +
    </button>
</div>
