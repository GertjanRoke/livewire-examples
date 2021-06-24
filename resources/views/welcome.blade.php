@extends('layouts.app')

@section('content')
    <h1 class="text-gray-700 text-2xl">Welcome To {{ config('app.name') }}</h1>
    <p class="mt-2 text-gray-600 tracking-wider italic">Click on one of the links to see how I build that
        use-case.</p>
    <p class="mt-4 text-gray-700">Examples:</p>
    <ul class="mt-2 space-y-3">
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
        <li>
            <a href="{{ route('alpine-js-event-listener') }}"
               class="text-gray-900 underline hover:text-gray-700"
            >
                Example where Livewire fires an event and Alpine acts on that event.
            </a>
        </li>
        <li>
            <a href="{{ route('autocomplete') }}"
               class="text-gray-900 underline hover:text-gray-700"
            >
                Autocomplete with Alpine v3
            </a>
        </li>
    </ul>
@endsection
