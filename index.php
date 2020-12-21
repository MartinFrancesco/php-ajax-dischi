<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-dischi</title>
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- Style.css -->
        <link rel="stylesheet" href="./dist/css/main.css">
    </head>
    <body>

    <header>
        <div class="container">
            <img src="./dist/img/logo.png" alt="">
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <div id="app">
    <main>
            <div class="container">
                <div v-for="cd in cds" class="card">
                    <div class="img-wrapper">
                        <img :src="cd.poster" :alt="cd.title">
                    </div>
                    <h2>{{cd.title}}</h2>
                    <small>{{cd.author}}</small>
                    <p>{{cd.year}}</p>
                    <small>{{cd.genre}}</small>
                </div>
            </div>
        </main>
    </div>

    <!-- JS -->
    <script src="./dist/js/main.js"></script>
    </body>
</html>