<div>
    <form wire:submit.prevent="submit">
        <p class="py-2 px-4 text-blue-900 bg-blue-200 text-center rounded">
            Type in the word <code class="py-px px-1 text-white bg-blue-500 font-semibold rounded">example</code> and it
            will give you some options.
        </p>
        @php($autocompleteEmail = 'autocomplete-email')
        <div x-data="autocomplete"
             x-init="eventName = '{{ $autocompleteEmail }}'"
             x-bind="container"
        >
            <label class="mt-4 block text-gray-700" for="email">Email address</label>
            <input
                x-bind="input"
                @event:{{ $autocompleteEmail }}.window="$wire.set('form.email', event.detail)"
                wire:model.lazy="form.email"
                placeholder="Type in 'example'"
                type="email"
                autocomplete="off"
                class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded focus:outline-none focus:bg-white border-gray-400 focus:border-blue-500"
            >
            <livewire:autocomplete
                event="{{ $autocompleteEmail }}"
                model="{{ \App\User::class }}"
                column="email"
            />
        </div>

        <div class="mt-4 flex items-center">
            <button class="px-3 py-1 bg-gray-700 text-white font-semibold rounded" type="submit">
                Submit
            </button>
            <p class="ml-2 text-sm text-gray-500 italic">- this will then be flashed to the session and shown below.</p>
        </div>
    </form>
    @if(session()->has('form-input'))
        <hr class="my-4">
        <p class="mt-4 text-gray-700">Submitted Form Data</p>
        <table class="mt-2 w-full border">
            @foreach(session()->get('form-input') as $key => $value)
                <tr class="{{ $loop->last ? '' : 'border-b' }}">
                    <td class="px-2 py-1 border-r capitalize">{{ $key }}</td>
                    <td class="px-2 py-1">{{ $value }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

@push('pre-scripts')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('alpine:init', () => {
            Alpine.data('autocomplete', () => ({
                eventName: '',

                container: {
                    ['x-ref']: 'container',
                    ['@focusout'](event) {
                        if (event.relatedTarget === null) {
                            this.$refs.input.focus();
                            return;
                        }

                        if (!this.$refs.container.contains(event.relatedTarget)) {
                            this.$dispatch(this.eventName, {close: true});
                        }
                    },
                },
                input: {
                    ['x-ref']: 'input',
                    ['@input.debounce'](event) {
                        this.$dispatch(this.eventName, {data: event.target.value})
                    },
                    ['@keyup.up']() {
                        console.log('focus-last');
                        this.$dispatch('focus-last:' + this.eventName)
                    },
                    ['@keyup.down']() {
                        console.log('focus-first');
                        this.$dispatch('focus-first:' + this.eventName)
                    },
                }
            }));
        });
    </script>
@endpush


