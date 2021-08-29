<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>

        
    </head>
    <body >

        <p>Built with &heart; by Jean-Nelka Delus.</p>
        <p><a href="/">Revenir a la page d'accueil</a></p>
        <footer>
            <p>&copyright; {{date('Y')}} &middot; <a href="/about-us">About Us</a></p>
        </footer>
    </body>
</html>
