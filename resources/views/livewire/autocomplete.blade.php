<div
    x-data
    x-on:focus-first:{{ $event }}.window="console.log($refs.results)"
    x-on:focus-last:{{ $event }}.window="$refs.more.focus()"
    x-on:{{ $event }}.window="
        event.detail.hasOwnProperty('close') && event.detail.close === true
            ? $wire.close
            : $wire.search(event.detail.data)
    "
    class="-mt-1 pt-2 border border-t-0 border-gray-400 rounded-b {{ $results->isEmpty() ? 'hidden' : '' }}"
>
    @if($results->isNotEmpty())
        <div x-ref="results">
            @foreach($results as $result)
                <button
                    type="button"
                    wire:click="selectedValue('{{ $result->{$column} }}')"
                    class="py-2 px-4 w-full flex items-center {{ $loop->last  ? '' : 'border-b border-gray-400' }}"
                >
                    {{ $result->{$column} }}
                </button>
            @endforeach
        </div>
        <div class="mt-1">
            @unless($hasAll)
                <button
                    x-rel="more"
                    type="button"
                    wire:click="more"
                    class="py-2 px-4 w-full text-center border-t border-gray-400"
                >
                    Load more
                </button>
            @endunless
        </div>
    @endif
</div>
