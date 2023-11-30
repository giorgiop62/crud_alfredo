<script>
export default {
    name: 'AppHeader'
}
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <router-link class="navbar-brand" to="/home" tag="button">Alfredo Pumilia</router-link>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fa-solid fa-music"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/home" tag="button">Home</router-link>

                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/projets" tag="button">Discografia</router-link>

                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/date" tag="button">Date</router-link>

                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/contact" tag="button">Contatti</router-link>

                    </li>
                </ul>

                <span class="navbar-text d-none d-sm-block">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/alfredo.pumilia?locale=it_IT%2F"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/alfredo_pumilia/"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/watch?v=9jPcHhuZQ8Q"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://open.spotify.com/user/1174504297?si=f2b72c67d1d54f02"><i
                                    class="fa-brands fa-spotify"></i></a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
</template>

<style lang="scss" scoped>
a {
    margin-left: 20px;
    color: white;
}

.navbar-brand {
    font-size: 25px;
    font-style: oblique;
}
</style>