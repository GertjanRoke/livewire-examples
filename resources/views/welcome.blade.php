<x-layout>
    <h1 class="text-gray-700 text-2xl">Welcome To {{ config('app.name') }}</h1>
    <p class="mt-2 text-gray-600 tracking-wider italic">Click on one of the links to see how I build that
        use-case.</p>
    <p class="mt-4 text-gray-700">Examples:</p>
    <ul class="mt-2">
        <li>
            <a href="{{ route('language-validation', ['locale' => 'en']) }}"
               class="text-gray-900 underline hover:text-gray-700"
            >
                Language Validation
            </a>
        </li>
        <li>
            <a href="{{ route('simple-form') }}"
               class="text-gray-900 underline hover:text-gray-700"
            >
                A Form Without Specifying Every Form Element
            </a>
        </li>
    </ul>
</x-layout>
