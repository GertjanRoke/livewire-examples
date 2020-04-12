<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <livewire:styles/>
</head>
<body class="bg-gray-100 antialiased">
<div class="container mx-auto max-w-lg py-16">
    <div class="px-4 py-4 bg-white rounded-lg shadow-lg">
        {{ $slot }}
    </div>
</div>
<livewire:scripts/>
</body>
</html>
