<div x-data="{ foo: 'BAR' }" x-init="() => {
    window.livewire.on('somethingUpdated', () => {
        foo = 'BAZ'
    })
}">
    <label class="block text-gray-700" for="name">
        Here you should see BAR by default and BAZ after the event is fired
    </label>
    <input x-model="foo"
           id="name"
           type="text"
           class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded focus:outline-none focus:bg-white">
    <div class="mt-4 text-center">
        <button wire:click="updatingSomething" type="button" class="px-3 py-1 bg-gray-700 text-white font-semibold
    rounded">
            Fire the event!
        </button>
    </div>
</div>

@push('pre-scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endpush
