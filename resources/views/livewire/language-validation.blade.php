<div>
    <label class="block text-gray-900" for="name">Name</label>
    <input wire:model="name"
           id="name"
           placeholder="Name please..."
           type="text"
           class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded
           focus:outline-none focus:bg-white
           {{ $errors->has('name') ? 'border-red-500 focus:border-red-600' : 'border-gray-400 focus:border-blue-500' }}"
           \>
    @error('name')
    <p class="mt-1 text-red-500">{{ $message }}</p>
    @enderror
</div>
