<div>
    <form wire:submit.prevent="submit">
        <label class="block text-gray-700" for="name">Name</label>
        <input
            wire:model.lazy="form.name"
            name="name"
            id="name"
            placeholder="Name please..."
            type="text"
            class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded
           focus:outline-none focus:bg-white
           {{ $errors->has('name') ? 'border-red-500 focus:border-red-600' : 'border-gray-400 focus:border-blue-500' }}">
        @error('name')
        <p class="mt-1 text-red-500">{{ $message }}</p>
        @enderror

        <label class="mt-4 block text-gray-700" for="email">Email address</label>
        <input
            wire:model.lazy="form.email"
            name="email"
            id="email"
            placeholder="Email address please..."
            type="email"
            class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded
           focus:outline-none focus:bg-white
           {{ $errors->has('email') ? 'border-red-500 focus:border-red-600' : 'border-gray-400 focus:border-blue-500' }}">
        @error('email')
        <p class="mt-1 text-red-500">{{ $message }}</p>
        @enderror

        <div class="mt-4 flex items-center">
            <button class="px-3 py-1 bg-gray-700 text-white font-semibold rounded" type="submit">
                Submit
            </button>
            <p class="ml-2 text-sm text-gray-500 italic">- this will then be session flashed to the html below.</p>
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
