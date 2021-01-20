<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esteban Salas Guzmán</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        @include('css')

    </head>
    <body>
        <main>
            <section class="glass">
                <div class="dashboard">
                <div class="user">
                    <img src="" alt="" />
                    <h3>Simo Edwin</h3>
                    <p>Pro Member</p>
                </div>
                <div class="links">
                    <div class="link">
                    <img src="" alt="" />
                    <h2>Streams</h2>
                    </div>
                    <div class="link">
                    <img src="" alt="" />
                    <h2>Games</h2>
                    </div>
                    <div class="link">
                    <img src="" alt="" />
                    <h2>New</h2>
                    </div>
                    <div class="link">
                    <img src="" alt="" />
                    <h2>Library</h2>
                    </div>
                </div>
                <div class="pro">
                    <h2>Join pro for free games.</h2>
                    <img src="" alt="" />
                </div>
                </div>
                <div class="games">
                <div class="status">
                    <h1>Active Games</h1>
                    <input type="text" />
                </div>
                <div class="cards">
                    <div class="card">
                    <img src="" alt="" />
                    <div class="card-info">
                        <h2>Assassins Creed Valhalla</h2>
                        <p>PS5 Version</p>
                        <div class="progress"></div>
                    </div>
                    <h2 class="percentage">60%</h2>
                    </div>
                    <div class="card">
                    <img src="" alt="" />
                    <div class="card-info">
                        <h2>Sackboy A Great Advanture</h2>
                        <p>PS5 Version</p>
                        <div class="progress"></div>
                    </div>
                    <h2 class="percentage">60%</h2>
                    </div>
                    <div class="card">
                    <img src="" alt="" />
                    <div class="card-info">
                        <h2>Spiderman Miles Morales</h2>
                        <p>PS5 Version</p>
                        <div class="progress"></div>
                    </div>
                    <h2 class="percentage">60%</h2>
                    </div>
                </div>
                </div>
            </section>
        </main>
        <div class="circle1"></div>
        <div class="circle2"></div>
    </body>
</html>
