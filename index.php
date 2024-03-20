<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi Json</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <div id="app">

        <nav class="py-3 mb-3">
            <div class="container">
                <div class="logo">
                    <img src="./img/logo-spotify.png" alt="">
                </div>
            </div>
        </nav>



        <div class="container">

            <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 justify-content-center">
                <li v-for="(disk, index) in diskList" class="mb-5" @click="showDiskDetails(index)">
                    <div class="rounded-3 d-flex flex-column justify-content-center align-items-center mx-5 pt-4 card ">
                        <div class="disk-container mb-3">
                            <img :src="'./img/' + disk.poster" :alt="disk.title" class="disk-image">
                        </div>
                        <div class="text-center mx-5 text">
                            <p class="lh-1 fs-5 text-wrap"> <strong>{{ disk.title }}</strong></p>
                            <p>{{ disk.author }}</p>
                            <p><strong>{{ disk.year }}</strong></p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>



        <div v-if="showOverlay" class="overlay">
            <div class="overlay-content">

                <div @click="closeOverlay()" class="overlay-close fs-2" aria-label="Close">X</div>

                <div class="text-center">
                    <div class="disk-container mb-3">
                        <img :src="'./img/' + selectedDisk.poster" :alt="selectedDisk.title" class="disk-image">
                    </div>
                    <p class="fs-5"><strong> {{ selectedDisk.title }}</strong></p>
                    <p> {{ selectedDisk.author }}</p>
                    <p> {{ selectedDisk.year }}</p>
                    <p> {{ selectedDisk.genre }}</p>
                </div>

            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>