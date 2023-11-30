<script>
export default {
    name: "Projets",
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Discografia</h1>
        <div class="box-disco p-5 d-flex">
            <div class="card" style="width: 18rem;">
                <img src="../assets/album1.png" class="card-img-top" alt="Majacosajusta">
                <div class="card-body">
                    <h5 class="card-title">Majacosajusta</h5>
                    <p class="card-text">Anno: 2021</p>
                    <a href="https://open.spotify.com/intl-it/artist/2gQaHes6Px7wbNHmp5H4KM?si=JUmw4bKBTfO2NIkFu7KcRw"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../assets/album2.png" class="card-img-top" alt="Hydruntum">
                <div class="card-body">
                    <h5 class="card-title">Hydruntum</h5>
                    <p class="card-text">Anno: 2016</p>
                    <a href="https://open.spotify.com/intl-it/album/4DuDbk2Kx5xfflF2nqrxCI?si=hFhDb4HDQdOxGftlyS-h7A"
                        class="btn btn-dark">Ascolta su Spotify</a>
                </div>
            </div>
        </div>


    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;
    height: 100vh;
}

.box-disco {
    justify-content: space-around;
}
</style>