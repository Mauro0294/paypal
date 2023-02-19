<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="max-w-[1200px] mx-auto">
            <ul class="flex justify-between">
                <div>
                    <img src="{{ asset('/images/paypal.png') }}" class="w-[136px]">
                </div>
                <div class="uppercase flex items-center">
                    <li>Consumenten</li>
                    <li>Bedrijven</li>
                    <li>Ontwikkelaars</li>
                    <li>Hulp</li>
                </div>
                <div class="flex items-center">
                    <button>Inloggen</button>
                    <button>Aanmelden</button>
                </div>
            </ul>
        </nav>
    </body>
</html>
