<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $page_title }} | Make like Twitter</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        <style>
            .overflow-y-auto::-webkit-scrollbar,
            .overflow-y-scroll::-webkit-scrollbar,
            .overflow-x-auto::-webkit-scrollbar,
            .overflow-x::-webkit-scrollbar,
            .overflow-x-scroll::-webkit-scrollbar,
            .overflow-y::-webkit-scrollbar,
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .overflow-y-auto,
            .overflow-y-scroll,
            .overflow-x-auto,
            .overflow-x,
            .overflow-x-scroll,
            .overflow-y,
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }

            .bg-dim-700 {
                --bg-opacity: 1;
                background-color: #192734;
            }

            html,
            body {
                margin: 0;
                background-color: #15202b;
            }

            svg.paint-icon {
                fill: currentcolor;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body>
        <div class="p-relative h-screen" style="background-color: #15202b">
            <div class="flex justify-center">

                <header class="text-white h-12 py-4 h-auto">
                    @include('layouts.leftsidenavigation')
                </header>

                <main role="main">
                    {{ $slot }}
                </main>

            </div>
        </div>
    </body>

</html>