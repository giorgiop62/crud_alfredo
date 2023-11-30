<script>
export default {
    name: "Home",
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Alfredo Pumilia</h1>
        <div class="carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/grupppo.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/Pumiliani-49.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/Pumiliani-33.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/notte.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/alfviolin.JPG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="description">
            <p class="p-3"> Musicista e compositore napoletano, classe 1990, inizia ad approcciare alla musica
                all’età di 11 anni
                studiando il flauto traverso, successivamente inizia lo studio della chitarra, approfondendola nel jazz per
                poi diplomarsi al conservatorio di Napoli S. Pietro a Majella in violino classico, sotto la guida del M°
                Antonio Colica.
                Il primo approccio al violino è avvenuto grazie all’incontro con il rumeno Illie Pipica, che lo ha spinto ad
                incuriosirsi ed appassionarsi ai vari linguaggi dell’est Europa, mantenendo sempre vivo lo studio della
                musica classica.
                Durante i suoi studi classici continua a dedicarsi lo studio del jazz, frequentando la MAD SCHOOL e girando
                l’Europa seguendo diversi stage per violino jazz, primo fra tutti lo stage con il violinista Didier Lockwood
                al CMDL (Centre des musiques Didier Lockwood).<br>
                -Nel 2016 con gli Araputo zen pubblicano il loro primo disco “Hydruntum” <br>
                -Nel 2021 sempre con Araputo zen esce il secondo Album “Majacosajusta” <br>
                Attualmente sta Lavorando al suo disco “Miradöis”. <br>
                BAND: <span>Araputo Zen</span> <br>
                Zygrya sting trio</p>
        </div>
        <div class="sub-img">
            <img class="gruppo" src="../assets/10_Araputi B&W.jpg" alt="Araputo Zen">
        </div>

    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;

}

p {
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
}

span {
    font-weight: bold;
    color: burlywood;
}

h1 {
    padding-top: 20px;
}

img {
    width: 700px;
    height: 450px;
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: gray;
}

.carousel {
    width: 700px;
    margin: 0 auto;
    margin-top: 30px;
}

.gruppo {
    width: 670px;
    height: auto;
}

.sub-img {
    text-align: center;
    padding: 20px;
}
</style>