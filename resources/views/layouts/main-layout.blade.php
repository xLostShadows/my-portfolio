<!DOCTYPE html>

<html id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body class="bg-slate-900 leading-relaxed text-slate-400 antialiased selection:bg-teal-300 selection:text-teal-900">
        <div class="relative">
            <div id="responsive" class="responsive pointer-events-none fixed inset-0 z-30 transition duration-300"></div>
            <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">
                @yield('content')
            </div>
        </div>
            
        <script>
            const pos = { x : 0, y : 0 };

            let a = document.getElementById("responsive");
            let b = document.getElementById("html");
            

            const saveCursorPosition = function(x, y) {
                pos.x = x;
                pos.y = y;

                let c = `background: radial-gradient(200px at ${x}px ${y}px, rgba(29, 78, 216, 0.15), transparent 80%);`;

                document.documentElement.style.setProperty('--x', pos.x);
                document.documentElement.style.setProperty('--y', pos.y);
                a.setAttribute('style', c);
            }
            document.addEventListener('mousemove', e => { saveCursorPosition(e.clientX, e.clientY);});
        </script>
    </body>
</html>