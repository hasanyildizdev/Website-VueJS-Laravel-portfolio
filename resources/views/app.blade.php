<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>Hasan YILDIZ</title>
        <meta name="description" content="Full Stack Developer, Co-Founder of iyiapp.com" />
        <meta name="keywords" content="Software Developer, Full Stack Developer, Mekatronics Engineer" />
        <meta property="og: type" content="website" />
        <meta property="og: title" content="Hasan YILDIZ" />
        <meta property="og: description" content="Full Stack Developer, Co-Founder of iyiapp.com" />
        <meta property="og: image" content="/img/logo.png" />
        <meta property="og: url" content="https://hasanyildiz.iyiapp.com/" />
        <meta property="og: site_name" content="Hasan YILDIZ" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="Hasan YILDIZ"/>
        <meta name="twitter:description" content="Software Developer"/>
        <link rel="shortcut icon" type="image/webp" sizes="180x180"  href="{{ asset('img/crown2.webp') }}"/>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display:ital,wght@1,500&family=Work+Sans:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>