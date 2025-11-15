<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=geist:400,500,600,700" rel="stylesheet" />

    {{-- Basecoat UI --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.5/dist/basecoat.cdn.min.css">
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.5/dist/js/all.min.js" defer></script>

    {{-- Dark mode script from Basecoat documentation --}}
    <script>
        (() => {
            try {
                const stored = localStorage.getItem('themeMode');
                if (stored ? stored === 'dark' :
                    matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                }
            } catch (_) {}

            const apply = dark => {
                document.documentElement.classList.toggle('dark', dark);
                try {
                    localStorage.setItem('themeMode', dark ? 'dark' : 'light');
                } catch (_) {}
            };

            document.addEventListener('basecoat:theme', (event) => {
                const mode = event.detail?.mode;
                apply(mode === 'dark' ? true :
                    mode === 'light' ? false :
                    !document.documentElement.classList.contains('dark'));
            });
        })();
    </script>

    {{-- Styles / Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Datastar --}}
    @hyper
</head>

<body class="antialiased relative min-h-screen font-sans!">
    <div class="flex-1">
        @yield('content')
    </div>

    <x-theme-toggler class="fixed bottom-5 right-5 rounded-full" />
</body>

</html>
