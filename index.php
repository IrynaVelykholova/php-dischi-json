<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <title>php-dischi-json</title>
    </head>

    <body>

    <div id="app">

        <nav>
            <div class="container">
                <img src="https://static.vecteezy.com/system/resources/previews/022/100/989/original/spotify-logo-transparent-free-png.png" class="nav-img">
            </div>
        </nav>

        <div class="container h-100">
            <div class="row pt-5">
                <!-- ciclo v-for nei miei album -->
                <div class="col-4 mb-3" 
                    v-for="album in albums">

                    <!-- passo l'immagine -->
                    <div class="card text-center">
                        <div class="p-3">
                            <img :src="album.immagine" class="card-img-top card-img" alt="immagine-album">
                        </div>

                        <!-- passo i dati -->
                        <div class="card-body">
                            <h5>{{ album.nome }}</h5>
                            <p>{{ album.artista }}</p>
                            <h5>{{ album.anno }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./main.js"></script>
    </body>

</html>