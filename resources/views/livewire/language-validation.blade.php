<div>
    <label class="block text-gray-700" for="name">Name</label>
    <input wire:model="name"
           id="name"
           placeholder="Name please..."
           type="text"
           class="py-2 px-4 w-full bg-white appearance-none border rounded-sm text-gray-700 leading-tight rounded
           focus:outline-none focus:bg-white
           {{ $errors->has('name') ? 'border-red-500 focus:border-red-600' : 'border-gray-400 focus:border-blue-500' }}"
           \>
    <div>
        @error('name')
        <p class="mt-1 text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <hr class="my-4">
    <p class="text-gray-700">Switch the language</p>
    <ul class="mt-2 flex justify-between">
        <li>
            <a class="px-2 py-1 border rounded {{ session()->get('locale') === 'en' ? 'bg-gray-200' : '' }}"
               href="{{ route('language-validation', ['locale' => 'en']) }}"
            >
                English
            </a>
        </li>
        <li>
            <a class="px-2 py-1 border rounded {{ session()->get('locale') === 'ar' ? 'bg-gray-200' : '' }}"
               href="{{ route('language-validation', ['locale' => 'ar']) }}"
            >
                Arabic
            </a>
        </li>
        <li>
            <a class="px-2 py-1 border rounded {{ session()->get('locale') === 'es' ? 'bg-gray-200' : '' }}"
               href="{{ route('language-validation', ['locale' => 'es']) }}"
            >
                Spanish
            </a>
        </li>
        <li>
            <a class="px-2 py-1 border rounded {{ session()->get('locale') === 'nl' ? 'bg-gray-200' : '' }}"
               href="{{ route('language-validation', ['locale' => 'nl']) }}"
            >
                Dutch
            </a>
        </li>
    </ul>
</div>
