<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bartucz Petra</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="Ajax.js"></script>
        <script src="Teszt.js"></script>
        <script src="js.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            @if (Auth::check())
                <div>
                    <form>
                        <br>
                        <div class="form-group col-md-6 mx-auto">
                            <select class="form-control kategoriaSelect">
                                <option value="">Kérem válasszon!</option>
                            </select>
                        </div>
                    </form>


            <div class="szulo">
                <div class="sablon">
                    <div class="kerdes"></div>
                    <div class="valaszok">
                    <div class="v1"></div>
                    <div class="v2"></div>
                    <div class="v3"></div>
                    <div class="v4"></div>
                </div>
                </div>
            </div>
        </div>
        @endif
        </div>
    </body>
</html>
