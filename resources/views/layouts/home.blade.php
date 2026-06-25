<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Livewire' }}</title>
</head>
<body>

    {{ $slot }}

    <x-primary-button>
        {{ $btn }}
    </x-primary-button>
    
</body>
</html>